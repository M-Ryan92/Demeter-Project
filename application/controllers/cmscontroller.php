<?php

class CmsController extends CI_Controller {

    private $data;
    private $dVP = "cmstemplates/";  //Default view path

    function __construct() {
        parent::__construct();

        $this->load->dbutil();
        $this->load->library('session');
        $this->load->helper('file');
        $this->load->helper('asset_util');
        $this->load->helper('url');
        $this->load->helper('file');
        $this->setResources();
    }

    private function setResources() {
        $this->data = null;
        $this->data['img'] = asset_url() . 'img/';
        $this->data['js'] = asset_url() . 'js/';
        $this->data['bootstrapjs'] = asset_url() . 'Bootstrap/js/bootstrap.min.js';
        $this->data['bootstrapcss'] = asset_url() . 'Bootstrap/css/bootstrap.min.css';
        $this->data['jquery'] = asset_url() . 'JQuery/jquery.min.js';
        $this->data['ckeditor'] = asset_url() . 'ckeditor/ckeditor.js';
        $this->data['ckeditorjquery'] = asset_url() . 'ckeditor/adapters/jquery.js';
        $this->data['baseAssetUrl'] = asset_url();
    }

    public function view($page = 'removesession') {
        $this->data['pagename'] = $page;
        $this->data['message'] = $this->session->flashdata('message');
        if ($this->session->userdata('logged_in') != true) {
            $this->load->view($this->dVP . "login", $this->data);
        } else {
            $this->load->view("components/" . "cmsheader", $this->data);
            if ($page == "formulieren") {
                $this->data['formulieren'] = $this->db->query("SELECT * FROM  `filledforms` WHERE `pageurl` != 'home'  ORDER BY `updatedate` DESC");
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "inschrijvingen") {
                $this->data['adressen'] = $query = $this->db->query("SELECT * FROM  `filledforms` WHERE `pageurl` = 'home'  ORDER BY `updatedate` DESC");
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "paginabeheer") {
                $this->data['pages'] = $this->db->query("SELECT * FROM  `pages` ORDER BY `id` ASC");
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "createpage") {
                $this->db->select('*');
                $this->db->from('templates_fields');
                $this->db->join('fields', 'fields.id = templates_fields.field');
                $this->db->where('templates_fields.template', '3');
                $this->data['fields'] = $this->db->get();
                $this->data['templates'] = $this->db->query("SELECT * FROM  `templates` ORDER BY `title` ASC");
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "editpage") {
                $id = $this->input->get('id', TRUE);
                if ($id) {
                    $this->data['pageid'] = $id;
                    $this->data['pagemetadata'] = $this->db->query("SELECT * FROM  `pages` WHERE pages.id = ?",array($id))->result_array()[0];
                }
                $this->load->view($this->dVP . $page, $this->data);

            } elseif ($page == "bestanden") {
                $this->data['images'] = get_filenames('assets/img/');
                $this->load->view($this->dVP . $page, $this->data);
            } else {
                redirect('cms/formulieren');
            }
        }
    }

    public function generateSession() {
        $query = $this->db->get_where('users', array('email' => $this->input->post('email'),
            'password' => $this->input->post('password')), 10, 0);
        if ($query->num_rows() > 0) {
            $this->session->set_userdata($this->initSession($query->row()));
            redirect('cms/formulieren');
        } else {
            $this->session->set_flashdata('message', 'Fout email-adres of wachtwoord gebruikt.');
            redirect('cms/login');
        }
    }

    public function removeSession() {
        $this->session->sess_destroy();
        redirect('cms/login');
    }

    public function submitSubscription() {
        if (isset($_POST["subscription"])) {
            $data = array(
                'email' => $_POST["subscription"],
                'pageurl' => 'home'
            );
            $this->db->insert('filledforms', $data);
        }

        redirect('cms/inschrijvingen');
    }

    public function editSubscription() {
        if (isset($_POST["id"]) && isset($_POST["email"])) {
            $this->db->from('filledforms');
            $this->db->where('id', $_POST["id"]);
            $this->db->set('email', $_POST["email"]);
            $this->db->update();
        }

        redirect('cms/inschrijvingen');
    }

    public function deleteSubscription() {
        if (isset($_POST['id'])) {
            $this->db->delete('filledforms', array('id' => $_POST['id']));
        }
        redirect('cms/inschrijvingen');
    }

    private function initSession($row) {
        return $sessionInfo = array(
            'username' => $row->username,
            'email' => $row->email,
            'logged_in' => TRUE
        );
    }

    public function submitpage() {
        $data = array(
            'pagetitle' => $this->input->post('title'),
            'pageurl' => $this->input->post('url'),
            'template' => $this->input->post('template'),
            'metatitle' => $this->input->post('metatitle'),
            'metakeywords' => $this->input->post('metakeywords'),
            'metadescription' => $this->input->post('metadescription')
        );
        $this->db->insert('pages', $data);
        $pageId = $this->db->insert_id();
        foreach ($this->input->post('fields') as $key => $field) {
            if ($field != "") {
                $data = array(
                    'page' => $pageId,
                    'template' => $this->input->post('template'),
                    'field' => $key,
                    'value' => $field
                );
                $this->db->insert('pages_templates_fields', $data);
            }
        }
        redirect('cms/paginabeheer');
    }

    public function submitImage() {
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload("input-file-preview")) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" style="margin-top: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Er is iets misgegaan met het uploaden. Probeer het later opnieuw!</div>');
        } else {
            $fileinfo = [
                "filename" => $this->input->post('filename'),
                "alttext" => $this->input->post('alttext')
            ];
            $this->db->insert('files', $fileinfo);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" style="margin-top: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Afbeelding is succesvol upgeload!</div>');
        }
        redirect('cms/bestanden');
    }

    public function removeImage() {
        $result = unlink("assets/img/" . $this->input->post('filename'));
        var_dump($result);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" style="margin-top: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Het bestand ' . $this->input->post('filename') . ' is succesvol verwijderd!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" style="margin-top: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Er is iets misgegaan met het verwijderen van het bestand. Probeer het later opnieuw!</div>');
        }
        redirect('cms/bestanden');
    }

    public function removePage() {
        //TODO: Write function to remove a webpage
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" style="margin-top: 10px;" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            De pagina is succesvol verwijderd.</div>');
        redirect('cms/paginabeheer');
    }

}

<?php

class CmsController extends CI_Controller {

    private $data;
    private $dVP = "cmstemplates/";  //Default view path

    function __construct() {
        parent::__construct();

        $this->load->dbutil();
        $this->load->dbforge();
        $this->load->library('session');
        $this->load->helper('file');
        $this->load->helper('asset_util');
        $this->setResources();
    }

    private function setResources() {
        $this->data = null;
        $this->data['img'] = asset_url() . 'img/';
        $this->data['js'] = asset_url() . 'js/';
        $this->data['bootstrapjs'] = asset_url() . 'Bootstrap/js/bootstrap.min.js';
        $this->data['bootstrapcss'] = asset_url() . 'Bootstrap/css/bootstrap.min.css';
        $this->data['jquery'] = asset_url() . 'Jquery/jquery.min.js';
        $this->data['baseAssetUrl'] = asset_url();
    }

    public function view($page = 'removesession') {
        if ($this->session->userdata('logged_in') != true) {
            $this->data['message'] = $this->session->flashdata('message');
            $this->load->view($this->dVP . "login", $this->data);
        } else {
            if ($page == "formulieren") {
                $this->data['formulieren'] = $this->db->query("SELECT * FROM  `forms` ORDER BY `date` DESC");
                $this->load->view($this->dVP . $page, $this->data);
                
            } elseif ($page == "inschrijvingen") {
                $this->data['adressen'] = read_file('application/logs/Adressen.csv');
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "paginabeheer") {
                $this->data['pages'] = $this->db->query("SELECT * FROM  `pages` ORDER BY `timestamp` ASC");
                $this->load->view($this->dVP . $page, $this->data);
            } elseif ($page == "createpage") {
                $this->data['templates'] = $this->db->query("SELECT * FROM  `templates` ORDER BY `templateType` ASC");
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

    public function submitSubscriptions() {
        write_file("application/logs/Adressen.csv", $this->input->post('subscriptions'));
        redirect('cms/inschrijvingen');
    }

    private function initSession($row) {
        return $sessionInfo = array(
            'username' => $row->username,
            'email' => $row->email,
            'logged_in' => TRUE
        );
    }

}

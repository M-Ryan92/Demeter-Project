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
        $this->load->helper('url');
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
                $id = $this->input->get('id', TRUE);
                if($id) {
                    $this->db->select('*');
                    $this->db->from('page_pagecontent');
                    $this->db->join('pages', 'pages.pageId = page_pagecontent.pageIndex', 'left');
                    $this->db->join('pagecontent', 'page_pagecontent.contentIndex = pagecontent.contentId', 'left');
                    $this->db->join('templates', 'pagecontent.template = templates.templateId', 'left');
                    $this->db->where('pages.pageId =', $id);
                    $this->db->order_by('row', 'asc');
                    $this->db->order_by('position', 'asc');
                    $this->data['pageData'] = $this->db->get()->result();
                }
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

    private function query() {
        //insert data
        if($_POST){
            $data = array('pageTitle' => $_POST['pagetitle'], 
                'pageUrl' => $_POST['page-url'],
                'timestamp' => date("Y-m-d H:i:s"),
                'pageImg' => $_POST['page-image']);
            $this->db->insert('pages', $data);
            $pageId = $this->db->insert_id();

            $contentRowIds = array();
            for ($element=0; $element < sizeof($_POST['content']); $element++) { 
                $content = $_POST['content'][$element];
                $data = array('content' => $content['text'],
                    'template' => $_POST['template']);
                $this->db->insert('pagecontent', $data);
                $this->db->insert_id();
                array_push($contentRowIds, $this->db->insert_id());
            }

            foreach ($contentRowIds as $id) {
                $data = array('pageIndex' => $pageId,
                    'contentIndex' => $id);
                $this->db->insert('page_pagecontent', $data);
            }
        }
    }
    
    private function transactionHelper(){
        $this->db->trans_begin();
        //FixMe should be a callback
        $this->query();
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }
    }

    public function submitpage() {
        //validate data

        $this->transactionHelper();
        redirect('/cms/paginabeheer', 'refresh');
    }

}

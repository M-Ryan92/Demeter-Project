<?php

class CmsController extends CI_Controller {

    private $data;
    private $dVP = "cmstemplates/";  //Default view path

    function __construct() {
        parent::__construct();
        $this->load->library('session');
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
        if($this->session->userdata('logged_in') != true){
            $this->load->view($this->dVP ."login", $this->data);
        } else {
            $this->load->view($this->dVP . $page, $this->data);
        }
    }

    public function generateSession() {
        $sessionInfo = array(
                   'username'  => 'johndoe',
                   'email'     => 'johndoe@some-site.com',
                   'logged_in' => TRUE
               );
        $this->session->set_userdata($sessionInfo);
        redirect('cms/formulieren');
    }
    
    public function removeSession() {
        $this->session->sess_destroy();
        $this->load->view($this->dVP ."login", $this->data);
    }
}

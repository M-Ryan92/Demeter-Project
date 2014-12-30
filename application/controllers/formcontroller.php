<?php
class DefaultController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->dbforge();
        $this->load->helper('asset_util');
    }

    public function handleForm(){
        
        
        
    }
    
}
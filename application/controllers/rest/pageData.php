<?php

class pageData extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
    }

    function view() {
        echo 'test';
    }

    function getData($id) {
        $this->db->select('*');
        $this->db->from('templates_fields');
        $this->db->join('fields', 'fields.id = templates_fields.field');
        $this->db->join('pages_templates_fields', 'pages_templates_fields.field = templates_fields.field');
        $this->db->where('pages_templates_fields.page', $id);

        $rows_array = $this->db->get()->result_array();
        echo  '{ "templatefields" :' .json_encode($rows_array) . '}';
    }
    
}
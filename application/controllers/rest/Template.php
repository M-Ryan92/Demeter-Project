<?php

class Template extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
    }

    function view() {
        echo 'test';
    }

    function getFields($template) {
        $this->db->select('*');
        $this->db->from('templates_fields');
        $this->db->join('fields', 'fields.id = templates_fields.field');
        $this->db->where('templates_fields.template', $template);
        $this->db->order_by("fields.id", "asc");
        $rows_array = $this->db->get()->result_array();
        echo  '{ "templatefields" :' .json_encode($rows_array) . '}';
    }
    
}
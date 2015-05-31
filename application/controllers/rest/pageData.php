<?php

class pageData extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
    }

    function view() {
    }

    function getData($id) {
        $this->db->select('*');

        $this->db->from('pages');
        $this->db->join('templates_fields', 'templates_fields.template = pages.template');
        $this->db->join('fields', 'fields.id = templates_fields.field');
        $this->db->join('pages_templates_fields', 'pages_templates_fields.page = pages.id and fields.id = pages_templates_fields.field ', 'left');
        
        //$this->db->join('pages_templates_fields', 'pages_templates_fields.page = pages.id AND pages_templates_fields.template = pages.template AND pages_templates_fields.field = templates_fields.field'); 

        $this->db->where('pages.id', $id);
        $this->db->order_by("templates_fields.id", "asc");
        $rows_array = $this->db->get()->result_array();
        echo  '{ "templatefields" :' .json_encode($rows_array) . '}';
    }
}
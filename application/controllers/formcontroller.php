<?php

class FormController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->dbforge();
        $this->load->library('form_validation');
    }

    public function handleAjaxForm() {
        $response = $this->setValidationRules($this->input->post('pageurl', true));
        $response .= $this->validateForm();
        echo $response;
    }
    
    private function saveForm() {
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->input->post($key);
        }
        $this->db->insert('filledforms', $post); 
    }

    private function validateForm() {
        if ($this->form_validation->run() == TRUE) {
            $this->saveForm();
            return "Form was succesfully saved";
        } else {
            //var_dump(validation_errors());
            return "ERROR:Form did not validate correctly";
        }
    }

    private function setValidationRules($pageurl) {
        if ($pageurl != false) {
            $this->db->select('*');
            $this->db->from('pages');
            $this->db->join('templates', 'templates.id = pages.template');
            $this->db->where('pageurl', $pageurl);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $data = str_getcsv($row->formrules, "\n");
                foreach ($data as &$row) {
                    $row = str_getcsv($row, ";");
                    if(isset($row[2])) {
                        $this->form_validation->set_rules($row[0], $row[1], $row[2]);                        
                    }
                }
                return "";
            } else {
                return "ERROR:Could not process. No page URL found. ";
            }
        } else {
            return "ERROR:Could not process. No page URL found. ";
        }
    }
}

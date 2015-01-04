<?php

class FormController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->dbforge();
        $this->load->helper('asset_util');
    }

    public function handleAjaxForm() {
        $response = $this->setValidationRules($this->input->post('pageurl', true));
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

                //must improve
                $this->form_validation->set_rules($row->formrules);
                if ($this->form_validation->run() == FALSE) {
                    //insert in Db
                    
                } else {
                    //show error msg.
                    
                }
            }
        } else {
            echo "Could not process. No URL given.";
        }
        return "";
    }

}

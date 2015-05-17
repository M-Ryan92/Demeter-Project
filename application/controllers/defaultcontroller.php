<?php

class DefaultController extends CI_Controller {

    private $data;

    function __construct() {
        parent::__construct();
        $this->load->dbutil();
        $this->load->dbforge();
        $this->load->helper('asset_util');
        $this->setResources();
        $this->setWebsiteVariables();
        $this->setMenu();
    }

    public function view($page = 'Home') {
        $this->setPageVariables($page);
        $template = $this->setTemplateVariables($page);
        $this->load->view('components/head', $this->headerdata);
        $this->load->view('components/header', $this->menu);
        $this->load->view($template, $this->data);
        $this->load->view('components/footer', $this->headerdata);
    }

    private function setResources() {
        $this->headerdata['csspath'] = asset_url() . 'css/';
        $this->headerdata['assets'] = asset_url();

        $this->data['img'] = asset_url() . 'img/';
        $this->data['assets'] = asset_url();
        $this->data['js'] = asset_url() . 'js/';
        $this->data['owlJS'] = asset_url() . 'owl/owl.carousel.min.js';
    }

    private function setMenu() {
        $this->db->select('menutables2.*,pages.pageurl');
        $this->db->from('menutables2');
        $this->db->join('pages', 'menutables2.page = pages.id', 'left');
        $this->db->order_by('submenu', 'desc');
        $this->db->order_by('priority', 'desc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $menuList = [];
            $menu = [];
            foreach ($query->result() as $key) {
                $menu['id'] = $key->id;
                $menu['label'] = $key->label;
                $menu['pageurl'] = $key->pageurl;
                $menu['submenu'] = $key->submenu;
                $menu['priority'] = $key->priority;
                array_push($menuList, $menu);
            }
            $this->menu['menu'] = $menuList;
        } else {
            $this->menu['menu'] = "";
        }
    }

    private function setWebsiteVariables() {
        $variables = ["defaulttitle" => "metatitle",
            "defaultmetadescription" => "metadescription",
            "defaultmetakeywords" => "metakeywords",
            "websiteurl" => "url",
            "filename" => "css",
            "favicon" => "favicon",
            "postalcode" => "postalcode",
            "address" => "address",
            "phone" => "phone",
            "secondphone" => "secondphone",
            "contactemail" => "email",
            "facebookurl" => "facebook",
            "kvk" => "kvk",
            "btw" => "btw"
        ];

        $this->db->select('*');
        $this->db->from('website');
        $this->db->join('css', 'website.defaultcss = css.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();

            foreach ($variables as $key => $value) {
                if (!isset($this->headerdata[$value])) {
                    $this->headerdata[$value] = array();
                }
                array_push($this->headerdata[$value], $row->{$key});
            }
        }
    }

    private function setPageVariables($page = 'Home') {
        $variables['metavariables'] = ["metatitle" => "metatitle",
            "metadescription" => "metadescription",
            "metakeywords" => "metakeywords"];
        $variables['pagevariables'] = ["pagetitle" => "title", "pageurl" => "url"];

        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('pageurl', $page);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();

            foreach ($variables['metavariables'] as $key => $value) {
                if (!isset($this->headerdata[$value]))
                    $this->headerdata[$value] = array();
                array_push($this->headerdata[$value], $row->{$key});
            }
            $this->data['page'] = new stdClass();
            foreach ($variables['pagevariables'] as $key => $value) {
                $this->data['page']->$value = $row->{$key};
            }
        }
    }

    private function setTemplateVariables($page = 'Home') {
        $this->db->select('*, pages.id AS pageid, templates.id AS templateid, templates.filename AS templatefilename, css.filename AS cssfilename');
        $this->db->from('pages');
        $this->db->join('templates', 'templates.id = pages.template', 'left');
        $this->db->join('css', 'css.id = templates.css', 'left');
        $this->db->where('pageurl', $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->setFieldVariables($row->pageid, $row->templateid);
            $this->setJavascript($row->templateid);

            if (!isset($this->headerdata["css"])) {
                $this->headerdata["css"] = array();
            }
            array_push($this->headerdata["css"], $row->cssfilename);
            return $row->templatefilename;
        }
        return 'content/404.php';
    }

    private function setFieldVariables($page = "5", $template = "3") {
        $this->data['fields'] = new stdClass();
        
        $this->db->select('*');
        $this->db->from('templates_fields');
        $this->db->join('fields', 'templates_fields.field = fields.id');
        $this->db->where('template', $template);
        $queryTemplateFields = $this->db->get();

        foreach ($queryTemplateFields->result() as $row) {
            if (!isset($this->data['fields'])) {
                $this->data['fields'] = new stdClass();
            }
            $this->data['fields']->{$row->tagname} = '-';
        }
        
        $queryPageFields = $this->retrievePageFieldsValues($template, $page);
        foreach ($queryPageFields->result() as $row) {
            if($row->array == 1){
                if (!isset($this->data['fields']->{$row->tagname}) ||
                        $this->data['fields']->{$row->tagname} === '-') {
                    $this->data['fields']->{$row->tagname} = array();
                }
                array_push($this->data['fields']->{$row->tagname}, $row->value);
            } else {
                if (!isset($this->data['fields']->{$row->tagname}) ||
                        $this->data['fields']->{$row->tagname} === '-') {
                    $this->data['fields']->{$row->tagname} = $row->value;
                }
            }
        }
    }

    private function setJavascript($template = '3') {
        $this->db->select('*');
        $this->db->from('templates_js');
        $this->db->join('js', 'js.id = js');
        $this->db->where('template', $template);
        $query = $this->db->get();

        $this->data['jsfiles'] = array();
        foreach ($query->result() as $row) {
            array_push($this->data['jsfiles'], $row->filename);
        }
    }

    private function retrievePageFieldsValues($template, $page) {
        $this->db->select('*');
        $this->db->from('pages_templates_fields');
        $this->db->join('fields', 'pages_templates_fields.field = fields.id');
        $this->db->where('page', $page);
        $this->db->where('template', $template);
        return $this->db->get();
    }

}

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
        $this->data['results'] = $this->setMenu()->result();
    }

    public function view($page = 'Home') {
        $this->setPageVariables($page);
        $template = $this->setTemplateVariables($page);
        
        $this->load->view('components/head', $this->headerdata);
        $this->load->view('components/header', $this->data);
        $this->load->view($template, $this->data);
        $this->load->view('components/footer', $this->data);
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
        $this->db->select('*');
        $this->db->from('menuitems');
        $this->db->join('zpages', 'zpages.pageId = menuitems.pageRef', 'left');
        $this->db->order_by('menuId', 'asc');
        return $this->db->get();
    }

    private function setWebsiteVariables() {
        $variables = ["defaulttitle" => "metatitle",
            "defaultmetadescription" => "metadescription",
            "defaultmetakeywords" => "metakeywords",
            "websiteurl" => "url",
            "filename" => "css",
            "favicon" => "favicon"];

        $this->db->select('*');
        $this->db->from('website');
        $this->db->join('css', 'website.defaultcss = css.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();

            foreach ($variables as $key => $value) {
                if (!isset($this->headerdata[$value]))
                    $this->headerdata[$value] = array();
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
            
            if (!isset($this->headerdata["css"]))
                $this->headerdata["css"] = array();
            array_push($this->headerdata["css"], $row->cssfilename);
            return $row->templatefilename;
        }
        return 'content/404.php';
    }
    
    private function setFieldVariables($page = "5", $template = "3"){
        $this->db->select('*');
        $this->db->from('templates_fields');
        $this->db->join('fields', 'templates_fields.field = fields.id');
        $this->db->where('template', $template);
        $query = $this->db->get();
        
        foreach ($query->result() as $row) {
            if (!isset($this->data['fields']))
                $this->data['fields'] = new stdClass();
                $this->data['fields']->{$row->tagname} = '-';
        }
        
        $this->db->select('*');
        $this->db->from('pages_templates_fields');
        $this->db->join('fields', 'pages_templates_fields.field = fields.id');
        $this->db->where('page', $page);
        $this->db->where('template', $template);
        $query = $this->db->get();
        
        foreach ($query->result() as $row) {
            if (!isset($this->data['fields']))
                $this->data['fields'] = new stdClass();
            if (!isset($this->data['fields']->{$row->tagname}) || 
            $this->data['fields']->{$row->tagname} === '-')
                $this->data['fields']->{$row->tagname} = array();
            array_push($this->data['fields']->{$row->tagname}, $row->value);
        }
        if(isset($this->data['fields'])) {
            foreach (get_object_vars($this->data['fields']) as $key => $value) {
                if(count($value) == 1) {
                    $this->data['fields']->$key = $value[0];
                }
            }
        }
    }
    
    private function setJavascript($template = '3'){
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
}

    /* 	
     * //$this->data['jquery'] = asset_url() . 'JQuery/jquery.min.js';
        //$this->data['bootstrapJS'] = asset_url() . 'Bootstrap/js/bootstrap.min.js';
     * $this->headerdata['bootstrapCSS'] = asset_url() . 'Bootstrap/css/bootstrap.min.css';
     * $this->load->library('OwlCarousel');
        $this->load->library('Overlay');
        
     * 	private function getPageContent($page){
      $this->db->select('*');
      $this->db->from('page_pagecontent');
      $this->db->join('pages', 'pages.pageId = page_pagecontent.pageIndex', 'left');
      $this->db->join('pagecontent', 'page_pagecontent.contentIndex = pagecontent.contentId', 'left');
      $this->db->join('templates', 'pagecontent.template = templates.templateId', 'left');
      $this->db->where('pages.pageUrl =', $page);
      $this->db->order_by('row', 'asc');
      $this->db->order_by('position', 'asc');
      return $this->db->get();
      }

      private function getFormContent($id){
      $this->db->select('*');
      $this->db->from('formsinit');
      $this->db->where('formId =', $id);
      $this->db->order_by('formId', 'asc');
      $this->db->order_by('formColumn', 'asc');
      $this->db->order_by('order', 'asc');
      return $this->db->get();
      }
     * private $hf;
      public function view($page = 'Home')
      {
      $q = $this->getPageContent($page);

      $qmenu = $this->getMenu();
      $this->data['results'] = $this->getMenu()->result();

      // load view
      $this->load->view('components/header', $this->data);

      if($q->num_rows() > 0){
      $this->data['title'] = ucfirst($q->row()->pageTitle);
      $this->load->view($this->bvp.'simple title', $this->data);

      for ($i=0; $i < $q->num_rows(); $i++) {
      $row = $q->row_array($i);
      $this->data['content'] = $row['content'];
      $this->data['contentImg'] = $row['contentImg'];
      $this->data['imgAlt'] = $row['imgAlt'];

      if(isset($_GET['overlay']) && $row['imgAlt'] != null && $row['contentImg'] != null){
      $image = array();
      $alt = explode(';',$this->data['imgAlt']);
      $file = explode(';', $row['contentImg']);

      for ($f=0; $f < sizeof($file)  ; $f++) {
      if($file[$f] != "") array_push($image, new Image($file[$f],$alt[$f]) );
      }

      $this->data['image'] = $image;
      $this->load->view('components/overlay', $this->data);
      }


      if($row['form'] != 0){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');

      $formc = $this->getFormContent($row['form'])->result();
      $a = array();
      foreach ($formc as $r) {
      array_push($a, $r);
      }
      $this->data['formTitle'] = $row['formTitle'];
      $this->data['submitText'] = $row['formSubmit'];
      $this->data['formSize'] = $row['formSize'];
      $this->data['formInfo'] = $a;
      }

      if($row['position'] != 0) {
      if(!isset($hf['size'])){
      $hf['size'] = $row['size'];
      }
      $hf['content'][$row['position'] -1] = function ($i,$ref){
      $ref->load->vars($ref->load->view($ref->bvp.$i['templateType'], $i));
      };
      $hf['input'][$row['position'] -1] = array_merge($this->data, $row);
      $next = $q->next_row('array');

      if($i == $q->num_rows()-1 || $row['position'] == 0){
      $hf['objRef'] = $this;
      $this->load->view($this->bvp.'Halign', $hf);
      }

      } elseif($row['templateType']){
      $obj = array_merge($this->data, $row);
      $this->load->view($this->bvp.$row['templateType'], $obj);
      }
      }
      } else {
      $this->load->view($this->bvp.'404');
      }

      $this->load->view('components/footer', $this->data);

      }

      function validateTable($tableName){
      $r = $this->db->list_tables();
      foreach($r as $row) {
      if($row == $tableName){
      return true;
      }
      }
      return false;
      }

      public function sendForm(){
      $fields = $this->db->list_fields('forms');
      foreach($fields as $f) {
      switch ($f) {
      case 'type':
      $d[$f] = 'Bericht';
      break;

      case 'date':
      $d[$f] = date("Y-m-d H:i:s");
      break;

      default:
      $d[$f] = null;
      break;
      }
      }

      foreach($_POST as $key => $value) {
      if($key != 'table'){
      $d[$key] = $_POST[$key];
      }
      }
      $this->db->insert('forms', $d);
      }
      }
     * 
     * */

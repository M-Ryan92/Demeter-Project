<?php
class Pages extends CI_Controller {
	private $data;
	public $bvp = "templates/";
	function __construct(){
		parent::__construct();

		$this->load->dbutil();
		$this->load->dbforge();
		$this->load->helper('asset_util');
		$this->load->library('OwlCarousel');
		$this->load->library('Overlay');
		$this->setResources();
	}	

	private function getPageContent($page){
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
		$this->db->order_by('formColumn', 'asc');
		return $this->db->get();	
	}

	private function getMenu(){
		$this->db->select('*');
		$this->db->from('menuitems');
		$this->db->join('pages', 'pages.pageId = menuitems.pageRef', 'left');
		$this->db->order_by('menuId', 'asc');
		return $this->db->get();

	}

	private function setResources(){
		//General Resources for every page (should not be changed)
		$this->data = null;
		$this->data['img'] = asset_url().'img/';
		$this->data['js'] = asset_url().'js/';
		$this->data['baseCSS'] = asset_url(). 'css/webClient.css';
		$this->data['bootstrapJS'] = asset_url().'Bootstrap/js/bootstrap.min.js';
		$this->data['bootstrapCSS'] = asset_url().'Bootstrap/css/bootstrap.min.css';
		$this->data['jquery'] = asset_url().'JQuery/jquery.min.js';
		$this->data['owlJS'] = asset_url().'owl/owl.carousel.min.js';
		$this->data['baseAssetUrl'] = asset_url();

	}

	private $hf;
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

				if(isset($_GET['overlay']) && $this->data['content'] != null && $this->data['contentImg'] != null){
					$image = array();
					$alt = explode(';',$this->data['content']);
					$file = explode(';', $this->data['contentImg']);

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
<?php
class Pages extends CI_Controller {
	private $data;

	function __construct(){
		parent::__construct();

		$this->load->dbutil();
		$this->load->dbforge();
		$this->load->helper('asset_util');
		$this->load->library('OwlCarousel');
		$this->load->library('Overlay');
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
		$this->data['jquery'] = asset_url().'Jquery/jquery.min.js';
		$this->data['owlJS'] = asset_url().'owl/owl.carousel.min.js';
		$this->data['baseAssetUrl'] = asset_url();

	}

	private $hf;
	public function view($page = 'Home')
	{
		$this->setResources();
		$q = $this->getPageContent($page);

		$qmenu = $this->getMenu();
		$this->data['results'] = $this->getMenu()->result();

		// load view
		$this->load->view('components/header', $this->data);

		if($q->num_rows() > 0){
			$this->data['title'] = ucfirst($q->row()->pageTitle);
			$this->load->view('pages/simple title', $this->data);

			for ($i=0; $i < $q->num_rows(); $i++) { 
				$row = $q->row_array($i);
				$this->data['content'] = $row['content'];
				$this->data['contentImg'] = $row['contentImg'];

				if($row['position'] != 0) {
					if(!isset($hf['size'])){
						$hf['size'] = $row['size'];
					}
					$hf['content'][$row['position'] -1] = function ($i){
						$this->load->vars($this->load->view('pages/'.$i['templateType'], $i));
					};
					$hf['input'][$row['position'] -1] = $row;
					$next = $q->next_row('array');
					
					if($i == $q->num_rows()-1 || $row['position'] == 0){
							$this->load->view('pages/Halign', $hf);
					}

				} elseif($row['templateType']){
					$obj = array_merge($this->data, $row);
					$this->load->view('pages/'.$row['templateType'], $obj);
				}
		// if(isset($_GET['overlay'])){
		// 	$image = array();
		// 	$alt = explode(';',$this->data['content']);
		// 	$file = explode(';', $this->data['contentImg']);

		// 	for ($i=0; $i < sizeof($file)  ; $i++) { 
		// 		if($file[$i] != "") array_push($image, new Image($file[$i],$alt[$i]) );
		// 	}

		// 	$this->data['image'] = $image;
		// 	$this->load->view('components/overlay', $this->data);
		// }
			}
		} else {
			$this->load->view('pages/404');
		}


		$this->load->view('components/footer', $this->data);
	}

}
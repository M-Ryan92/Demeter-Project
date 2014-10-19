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

	private function getFormContent($id){
		$this->db->select('*');
		$this->db->from('forms');
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
					$formc = $this->getFormContent($row['form'])->result();
					$a = array();
					foreach ($formc as $r) {
						array_push($a, $r);
					}
					$this->data['formInfo'] = $a;
				}

				if($row['position'] != 0) {
					if(!isset($hf['size'])){
						$hf['size'] = $row['size'];
					}
					$hf['content'][$row['position'] -1] = function ($i){
						$this->load->vars($this->load->view('pages/'.$i['templateType'], $i));
					};
					$hf['input'][$row['position'] -1] = array_merge($this->data, $row);
					$next = $q->next_row('array');
					
					if($i == $q->num_rows()-1 || $row['position'] == 0){
							$this->load->view('pages/Halign', $hf);
					}

				} elseif($row['templateType']){
					$obj = array_merge($this->data, $row);
					$this->load->view('pages/'.$row['templateType'], $obj);
				}
			}
		} else {
			$this->load->view('pages/404');
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
		$tablename = str_replace(' ', '_', $_POST['table']);

		if(!$this->validateTable($tablename)){	
			foreach($_POST as $key => $value) {
				if($key != 'table'){
					$this->dbforge->add_field(
						array($key => array('type' => 'Text'))
					);
				}
			}
			$this->dbforge->create_table($tablename);
		}

		$d;
		foreach($_POST as $key => $value) {
			if($key != 'table'){
				$d[$key] = $_POST[$key];
			}
		}
		$this->db->insert($tablename, $d);
	}

	public function exportDB($backup = null){
		$this->load->dbutil();

		$prefs = array(
			'tables'=> array(),
			'ignore'=> array('vado_log'),
			'format'=> 'txt',
			'filename'=> 'backup.sql',
			'add_drop'=> TRUE,
			'add_insert'=> TRUE,
			'newline'=> "\n"
		);
		
		if($backup == null) $backup =& $this->dbutil->backup($prefs);
		$a = array('id' => '1', 'backupString' => $backup);
		if(!$this->validateTable("db_backup")){
		 	$this->dbforge->add_field(
		 		array('id' => array('type' => 'Text'))
		 	);
		 	$this->dbforge->add_field(
		 		array('backupString' => array('type' => 'Text'))
		 	);
		 	$this->dbforge->create_table("db_backup");
		 	$this->db->insert("db_backup", $a);
		}else{
			$this->db->where('id', '1');
			$this->db->update("db_backup", $a);
		}
	}
	public function importDB(){
		$this->db->select('backupString');
		$this->db->from('db_backup');
		$this->db->where('id =', '1');
		$b = $this->db->get()->result()[0]->backupString;
		return $b;
	}

	public function saveDB($s){
		foreach (explode(";\n", $s) as $sql){
			$sql = trim($sql);
			if($sql){
				$this->db->query($sql);
			} 
		}
		return $this->db;
	}

	public function CreateDB($base=false){
		$sql_clean = '';
		$result = $this->db->list_tables();		
		if(!$base){
			if (sizeof($result) < 1) {
				$backup = file_get_contents(asset_url().'backup.sql');
				foreach (explode("\n", $backup) as $line){
					if(isset($line[0]) && $line[0] != "#"){
						$sql_clean .= $line."\n";
					}
				}
				$this->saveDB($sql_clean);
				$this->saveDB($this->importDB());
			}else if(sizeof($result) == 1){
				$b = $this->importDB();
				$this->saveDB($b);
			}
		}else{
			$backup = file_get_contents(asset_url().'backup.sql');
			foreach (explode("\n", $backup) as $line){
				if(isset($line[0]) && $line[0] != "#"){
					$sql_clean .= $line."\n";
				}
			}

			foreach( $result as $row ) {
		 		$this->dbforge->drop_table($row);
		 	}
			$this->saveDB($sql_clean);
			$this->saveDB($this->importDB());
		}
	}

	public function DeleteDB(){
		$result = $this->db->list_tables();
		$b = $this->importDB();
		$this->saveDB($b);

		if (sizeof($result) > 0) {
			$this->exportDB();
			//deleteDB
			foreach( $result as $row ) {
				if($row != "db_backup"){
		 			$this->dbforge->drop_table($row);
		 		}
			}
		}
	}

}
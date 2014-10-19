<?php
class DataBaseManager extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->dbutil();
		$this->load->dbforge();
		$this->load->helper('asset_util');
	}
	
	public function exportDB($backup = null, $version = 1){
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
		$a = array('id' => $version, 'backupString' => $backup);
		$r = $this->db->where('id', $version);
		if(!$this->db->from("db_backup")->get()->result()){
			$this->db->insert("db_backup", $a);
		}else{
			$this->db->update("db_backup", $a);
		}
	}

	public function importDB($version = 1){
		$this->db->select('backupString');
		$this->db->from('db_backup');
		$this->db->where('id =', $version);
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

	public function removeDBVersion($version){
		$this->db->delete('db_backup', array('id' => $version));
	}

	public function restoreDBVersion($version){
		$backup = $this->importDB($version);
		$this->DeleteDB();
		$this->saveDB($backup);
	}

	public function CreateDB($version=1){
		$sql_clean = '';
		$result = $this->db->list_tables();

		if($version==1){
			$backup = file_get_contents(asset_url().'backup.sql');
			foreach (explode("\n", $backup) as $line){
				if(isset($line[0]) && $line[0] != "#"){
					$sql_clean .= $line."\n";
				}
			}
			if(sizeof($result) > 0){
				foreach( $result as $row ) {
		 			$this->dbforge->drop_table($row);
		 		}
			}
			//create import database
			$this->saveDB($sql_clean);
			$backup = $this->importDB();
			$this->saveDB($backup);

			//export base db version
			$this->exportDB($backup);
		}else{
			$backup = $this->importDB();
			$this->exportDB($backup, $version);
		}
	}

	public function DeleteDB($force = false){
		$result = $this->db->list_tables();

		if (sizeof($result) > 0) {
			$this->exportDB();
			//deleteDB
			foreach( $result as $row ) {
				if($row != "db_backup" || ($row == "db_backup" && $force)){
		 			$this->dbforge->drop_table($row);
		 		}
			}
		}
	}

}
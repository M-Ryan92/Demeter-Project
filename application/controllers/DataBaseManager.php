<?php
class DataBaseManager extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->dbutil();
		$this->load->dbforge();
		$this->load->helper('asset_util');
	}
	
	public function createDB(){
		$i = array();
		if(!$this->dbutil->database_exists('cms_db')){
			if($this->dbforge->create_database('cms_db')){
				$this->db->close();
				if($this->load->database('cms')){
					$i['message'] = "cmd_db created and successfully connected.";
					$i['status'] ='success';
					return $i;
				}else {
					$i['message'] = "cmd_db created but could not connect.";
					$i['status'] ='error';
					return $i;
				}
			} else {
				$i['message'] = "could not create cms_db";
				$i['status'] ='error';
				return $i;
			}
		}
	}


	public function setBackupDB($backup = null, $v = 1){
		$version = isset($_GET['version']) ? $_GET['version'] :null;
		if($version == null) $version = $v;

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
			$this->db->where("id", $version);
			$this->db->update("db_backup", $a);
		}
	}

	public function getBackupDB($version = 1){
		$this->db->select('backupString');
		$this->db->from('db_backup');
		$q = $this->db->where('id =', $version)->get();
		if($q->num_rows() > 0) return $q->result()[0]->backupString;
	}

	public function saveDB($s){
		foreach (explode(";\n", $s) as $sql){
			$sql = trim($sql);
			if($sql){
				$this->db->query($sql);
			} 
		}
	}

	public function removeDBVersion($v= null){
		$version = isset($_GET['version']) ? $_GET['version'] :null;
		if($v != null){
			$version = $v;
		};
		if($version != null){
			$this->db->delete('db_backup', array('id' => $version));	
		};
	}

	public function restoreDBVersion($v = null){
		$version = isset($_GET['version']) ? $_GET['version'] :null;
		if($v != null){
			$version = $v;
		};
		if($version != null){
			$backup = $this->getBackupDB($version);
			$r = $this->db->query('SELECT * FROM db_backup')->result_array();

			$this->deleteTables();
			$this->saveDB($backup);
			$this->db->empty_table('db_backup');
			$this->db->insert_batch('db_backup', $r);
		}
	}

	public function createTables($version=1){
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
			$backup = $this->getBackupDB();
			$this->saveDB($backup);
		}else{
			$backup = $this->getBackupDB($version);
			$this->setBackupDB($backup, $version);
		}
	}

	public function deleteTables($force = false){
		$result = $this->db->list_tables();

		if (sizeof($result) > 0) {
			$this->setBackupDB();
			//deleteTables
			foreach( $result as $row ) {
				if($row != "db_backup" || ($row == "db_backup" && $force)){
		 			$this->dbforge->drop_table($row);
		 		}
			}
		}
	}

}
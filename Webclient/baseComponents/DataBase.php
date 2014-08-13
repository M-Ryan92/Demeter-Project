<?php

class DataBase {

    private $host = '185.28.20.10';
    private $user = 'u105689825_admin';
    private $password = 'DemeterDB';
    private $databasename = 'u105689825_demdb';
    private $db;

    public function __construct() {
        $this->db = new mysqli($this->host, $this->user, $this->password, $this->databasename);
        if ($this->db->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
    }

    public function insertForm(array $columnArray, $formType) {
        //$sql = <<<SQL
//INSERT INTO `forms` (`type`, `date`, `email`, `name`, `message`, `subject`)
//VALUES ('$type', CURRENT_TIMESTAMP, '$email', '$name', '$message', '$subject');
//SQL;
        // Generate query
        $sqlColum = "INSERT INTO `forms` (`type`, `date`";
        $sqlValue = ") VALUES ( '$formType', CURRENT_TIMESTAMP";
        
        foreach ($columnArray as $key => $value) {
            $sqlColum .= ", `" . $key . "`";
            $sqlValue .= ", '" . str_replace("'","\'", $value ) . "'";            
        }
        $sql = $sqlColum . $sqlValue . ");";
        if ($this->db->query(($sql))) {
            //die('There was an error running the query [' . $this->db->error . ']');
        }
    }

}
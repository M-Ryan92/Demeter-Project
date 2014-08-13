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
        $sqlColum = "INSERT INTO `forms` (`type`, `date`";
        $sqlValue = ") VALUES ( '$formType', CURRENT_TIMESTAMP";

        foreach ($columnArray as $key => $value) {
            $sqlColum .= ", `" . $key . "`";
            $sqlValue .= ", '" . $value . "'";
        }
        $sql = $sqlColum . $sqlValue . ");";
        $this->runQuery($sql);
    }

    private function runQuery($sql) {
        $this->db->query(str_replace("'", "\'", $sql));
    }

}

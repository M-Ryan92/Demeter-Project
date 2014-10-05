<?php

class DataBase {

    private $host = 'demetervoeding.nl.mysql';
    private $user = 'demetervoeding_';
    private $password = 'nyxxVRdu';
    private $databasename = 'demetervoeding_';
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
            $sqlColum .= ", `" . str_replace("'", "\'", $key) . "`";
            $sqlValue .= ", '" . str_replace("'", "\'", $value) . "'";
        }
        $sql = $sqlColum . $sqlValue . ");";
        $this->runQuery($sql);
    }

    private function runQuery($sql) {
        $this->db->query($sql);
    }

}

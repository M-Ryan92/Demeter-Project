<?php
# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
    include("../DataBase.php");
    $db = new DataBase();
    $db->insertForm($_POST, "Bericht");
    
    echo 'succes';
  
}
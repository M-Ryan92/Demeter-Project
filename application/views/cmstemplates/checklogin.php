<?php
ini_set('display_errors', 1);
ob_start();
$host="demetervoeding.nl.mysql";
$username="demetervoeding_";
$password="nyxxVRdu";
$db_name="demetervoeding_";
$tbl_name="users";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$username=$_POST['email']; 
$password=$_POST['password']; 
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE email='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
header("location:formulieren.php");
}
else {
  header("location:login.php");
}
ob_end_flush();
?>
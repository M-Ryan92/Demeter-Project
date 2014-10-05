<?php
# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
    include("../DataBase.php");
    $db = new DataBase();
    $db->insertForm($_POST, "Bericht");
    
    echo 'succes';
	require '../../resources/mail.php';
	$body = "Email: " . $_POST['email'];
	$body .= "\r\nNaam: " . $_POST['name'];
	if(isset($_POST['subject'])) $body .= "\r\nOnderwerp: " . $_POST['subject'];
	$body .= "\r\nMessage: \r\n" . $_POST['message'];
    
    $mail = new Mail("Formulier ingevuld", $body, "info@demetervoeding.nl");
    $mail->sendMail();   

    $mail2 = new Mail("Formulier ingevuld", $body);
    $mail2->sendMail();   


}
?>
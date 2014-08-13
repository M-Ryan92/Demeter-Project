<?php
# if request sent using HTTP_X_REQUESTED_WITH
if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
  if (isset($_POST['email'])) {

    //$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    
  }
  else {
    echo 'All Fields are required';
  }
  return;
}

<?php
include_once('connection.php');

$email = $_POST['email'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
       echo 0;	
       exit;
    }
    else{
      echo  1;
      exit;
    }

?>
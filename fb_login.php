<?php
include_once('connection.php');

session_start();

if($_POST['name']!=''){ 

    $name = $_POST['name'];

    $name = (strlen($name)>7) ? substr($name,0,7) : $name;  //only 7 characters are allowed in name fieled
    $_SESSION['name']=$name;
   echo 1;
}
else
{
echo 0;
}
?>
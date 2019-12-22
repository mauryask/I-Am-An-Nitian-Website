<?php
$charset = "UTF8";
$servername = "localhost";
$username = "root";
$password = ""; //testing mode 
$dbname = "imn";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: ".$conn->connect_error);
 }

?>
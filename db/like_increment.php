<?php  
include_once('connection.php');
$id = $_POST['id'];
$counter = $_POST['counter'];

$query = "update tbl_images set likes = likes + {$counter} where id='".$id."' ";

mysqli_query($conn, $query); 

?>
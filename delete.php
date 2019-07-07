<?php
include_once ('connection.php');
$id=$_POST['id'];
$delete = "DELETE FROM table WHERE id=".$id." ";
$result = mysqli_query($conn,$delete) or die(mysqli_error());
?>
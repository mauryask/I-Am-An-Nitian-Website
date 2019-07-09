<?php
include('connection.php');
$id = $_GET['del'];
$query = "delete from tbl_images where id='$id' ";
$result=mysqli_query($conn, $query);
if($result)
{
    header('location:edit.php');
}
else
{
    echo 'Failed to delete The record';
}
?>
<?php

session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
  exit('access denied page 404 not found');
}

include('connection.php');
$id = $_GET['del'];
$query_x = "delete from tbl_images where id='$id' ";
$query_y = "delete from rating_info where post_id='$id' "; // delete data related to this news rating info table
$query_z = "delete from comment where post_id = '$id' "; // also deleteing allt he coments on this post

$result=mysqli_query($conn, $query_x);
if($result)
{
    mysqli_query($conn, $query_y);
    mysqli_query($conn, $query_z);
    header('location:edit_news.php'); //refresh the current page instead of redirecting to same page again
}
else
{
    echo 'Failed to delete The record';
}
?>
<?php
session_start(); 
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
  exit("<div style='
  top:50%; 
  left:50%; 
  transform:translate(-50%,-50%);
  position:absolute;
  display:flex;
  flex-direction:column;
  align-items:center;
  '>
  <img src='images/access.png' width='200px' height='200px'>
  <p style='

  font-size:35px;
text-align:center;
font-weight:bold;
  '
  >Access Denied Page 404 Not Found<p>
  </div>");
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
    header('location:edit_news.php'); 
}
else
{
    echo 'Unable to delete the record';
}
?>
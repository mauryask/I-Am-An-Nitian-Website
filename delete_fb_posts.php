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
$query_x = "delete from fb_posts where id='$id' ";

$result=mysqli_query($conn, $query_x);
if($result)
{
     header('location:edit_fb_posts.php'); 
}
else
{
    echo 'Unable to delete the record';
}
?>

<?php
/*<<<<<<<<<<======= this files change the color of like button =========>>>>>>>>>>>*/
include_once('connection.php');
session_start();
$user_id= $_SESSION['user_id'];
$post_id = $_POST['post_id'];

$query ="select * from rating_info where user_id = '".$user_id."' and post_id = '".$post_id."'";
$rsltd = mysqli_query($conn, $query);
if($row = mysqli_fetch_assoc($rsltd))
{
   echo $row['like_st'];
} 

?> 
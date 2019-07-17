<?php
include('connection.php');
$id = $_GET['del'];
$query_x = "delete from tbl_images where id='$id' ";
$query_y = "delete from rating_info where post_id='$id' "; // delete data related to this news rating info table
mysqli_query($conn, $query_y);
$result=mysqli_query($conn, $query_x);
if($result)
{
    header('location:edit_news.php'); //refresh the current page instead of redirecting to same page again
}
else
{
    echo 'Failed to delete The record';
}
?>
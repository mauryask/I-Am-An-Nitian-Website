<?php
include_once('connection.php');

$post_id = $_POST['id'];

$query = "select * from tbl_images where id='".$post_id."'";

$result = mysqli_query($conn, $query);
if($row = mysqli_fetch_assoc($result))
{
    echo  $row['dislikes'];
}
else
{
    echo 0;
}

?>
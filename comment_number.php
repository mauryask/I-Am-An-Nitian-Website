<?php
include_once('connection.php');

$post_id = $_POST['post_id'];


$query= "select count(*) as total_count from comment where post_id = '".$post_id."'";

$result = mysqli_query($conn, $query);

if($row = mysqli_fetch_array($result))
{
  echo $row['total_count'];
}
else
{
    echo 0;
}

?>
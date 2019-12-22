<?php
include_once('connection.php');
$count = $_POST['count'];
$query = "insert into share (count) values('$count')";
$result=mysqli_query($conn, $query);
if($result)
{
    echo 1;
}
else
{
    echo 2;
}
?>


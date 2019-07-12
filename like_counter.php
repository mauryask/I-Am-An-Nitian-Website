<?php
include_once('connection.php');
$id = $_POST['id'];
$query= "select * from tbl_images where id='$id' ";
$result = mysqli_query($conn, $query);
$row= mysqli_fetch_assoc($result);
echo $row['likes'];
//echo 0;

/*
if()
{
    
}
else
{
    echo 0;
}*/
?>
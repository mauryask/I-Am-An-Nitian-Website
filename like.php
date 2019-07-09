<?php
include_once('connection.php');
$id =$_POST['id'];
$counter=1;/*
$query = "update tbl_images set likes= likes +{$counter} where id='".$id."'  ";
if(mysqli_query($conn, $query))
{*/
    $sql = "select * from tbl_images where id='".$id."' ";
    if($row=mysqli_query($conn, $sql))
    {
      echo $row['likes'];
    }
    else
    {
        echo 'Sorry2';
    } /* 
}
else
{
    echo 'Sorry1';
}

?>
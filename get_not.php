<?php
include_once('connection.php');
$sql = "SELECT * FROM tbl_images";
$result = $conn->query($sql);
$num_row= $result->num_rows;

if($num_row>0)
{  
    echo $num_row;
}

?>
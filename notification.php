<?php
include_once('connection.php');
$sql = "SELECT * FROM tbl_images order by id desc";
$result = $conn->query($sql);
$num_row= $result->num_rows;

    if($num_row>0)
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "<div class='notx' >".$row['heading']."</div>";      
        }
    } 
    else 
    {
        echo "0 results";
    }
?>
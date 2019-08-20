<?php
include_once('connection.php');
$query="select * from user where id between 1 and 10";
$result=mysqli_query($conn,$query);
$email=array();
$i=0;
while($row=mysqli_fetch_assoc($result))
{
echo $row['email'].', ';
$i++;
}
?>
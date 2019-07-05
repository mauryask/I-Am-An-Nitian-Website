<?php
include_once('connection.php');

$id = $_GET['id'];
$query="select * from tbl_images where  id='".$id."'  ";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_array($result);
?>


<html>
<?php 
echo '<img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/>' 
?>
</html>


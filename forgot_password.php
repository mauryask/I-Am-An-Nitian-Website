<?php
include_once('connection.php');
session_start();
$id = $_GET['id'];
$sample_rate=1;
$query="select * from tbl_images where  id='".$id."' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0)
{
    $sql = " UPDATE tbl_images SET views = views + {$sample_rate} WHERE id = ".$id." ";
    mysqli_query($conn,$sql); //counting page views
    mysqli_query($conn, $query);
}

$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html id="<?php echo $row['id']; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>I Am An Nitian | Forgot Password</title>
<link rel="icon" href="images\imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<meta name="theme-color" content="#000">
<link href="css/forgot.css" type="text/css" rel="stylesheet">
</head>

<body onload="loadme()">
      
<div id="loader">
</div>

 
<div class="msg">This email is not registered</div>

<div  class="forget_password">
<form>
<input type="email" placeholder="Enter Email" required>
<input type="submit" value="Submit" class="submit">
</form>

</div>

   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>


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
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body onload="loadme()">
      
<div id="loader">
</div>

<div class="msg"><p style="color:green;">Password changed succesfully</p></div>


<div  class="forgot_password">

<div class="logo" onclick="location.href='index.php'">
<img src="images/imnitian.png"/>
<p>I Am An Nitian</p>
</div>

<div class="form"> 
<form>
<input type="password" placeholder="New Password" required />
<input type="password" placeholder="Confirm New Password" required />
<input type="submit" value="submit"/>
</form>
</div>
 
</div>


<div class="copy_right"><p>Copyright &copy; 2019 | I Am An Nitian</p></div>
   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

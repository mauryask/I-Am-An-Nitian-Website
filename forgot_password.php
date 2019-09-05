
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

<div class="msg"><p id="msg"></p></div>


<div  class="forgot_password">

<div class="logo" onclick="location.href='index.php'">
<img src="images/imnitian.png"/>
<p>I Am An Nitian</p>
</div>

<div class="form"> 
<form method="post" autocomplete="off" enctype="multipart/fomr-data">
<input type="email" placeholder="Enter Email" required id="email"/>
<input type="submit" value="submit" class="submit"/>
</form>
</div>
 
</div>


<div class="copy_right"><p>Copyright &copy; 2019 | I Am An Nitian</p></div>
   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<script>

$(document).ready(function(){
$('.submit').click(function(){

var email = $('#email').val().trim();
if(email != "")
{

    $.ajax({
		url:'sent_pass_mail.php',
		type:'post',
		data: { email:email},
		success: function(response)
		{
		   
		}
	   
	});
}
else
{
    $('#msg').text('Please enter your registered email id');
}


})
})

</script>
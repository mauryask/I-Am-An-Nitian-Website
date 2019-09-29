
<!DOCTYPE html>
<html lang="en">
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

<div  class="forgot_password">
<div id="msg"><p id="msgx"></p></div>
<div class="logo" onclick="location.href='index.php'">
<img src="images/imnitian.png"/>
<p>I Am An Nitian</p>
</div>

<div class="form" method="post" autocomplete="off"> 
<form method="post">
<input type="text" placeholder="Enter Email"  id="email">
<button type="button" class="submit">Submit</button>
</form>
</div>
 
</div>


<div class="copy_right"><p>Copyright &copy; 2019 | I Am An Nitian</p></div>
   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/main.js"></script>

<script>

$(document).ready(function(){
$('.submit').click(function(){

var email = $('#email').val().trim();

if(email != '')
{
	$('.submit').text("wait...."); 
	$('.submit').prop("disabled", true);//disabling the button aftter clicking
   $.ajax({
		url:'sent_pass_mail.php',
		type:'post',
		data: { email:email},
		success: function(data)
		{
		  if(data == 1)
		  { 
			$('#msgx').text("Password reset email has been sent successfully<br>It may take 2 minutes or more to reach");
			$('.submit').text("submit");
			$('form').trigger('reset');
		  }
		  else if(data == 0)
		  {
			$('#msgx').text('Invalid Email');
			$('.submit').text("submit");
			$('.submit').prop("disabled", false); //enabling the button click
		  }
		}
	   
	});
	
}
else
{
    $('#msgx').text('Please enter your registered email id');
	setTimeout(function(){
              $('#msgx').fadeOut();
            },1000);
}
$('#msgx').fadeIn();
})
})

</script>
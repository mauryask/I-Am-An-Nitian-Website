
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

<div class="form" method="post"> 
<form method="post"  autocomplete="off">
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


$('#email').click(function(){
	$('#msg').css({'background':'transparent', 'border':'none', 'color':'transparent'});
})
	
$('.submit').click(function(){

//on button click
$('#msg').css({'background':'transparent', 'border':'none', 'color':'transparent'});

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
			$('#msg').css({'color':'#4F8A10', 'background':'#DFF2BF', 'border':'1px solid'});
			$('#msgx').text("Password reset email has been sent successfully");
			$('.submit').text("submit");
			$('form').trigger('reset');
		  }
		  else if(data == 0)
		  {
			$('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
			$('#msgx').text('Invalid Email');
			$('.submit').text("submit");
			$('.submit').prop("disabled", false); //enabling the button click
		  }
		}
	   
	});
	
}
else
{
	$('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
    $('#msgx').text('Please enter your registered email id');		
}

})
})

</script>
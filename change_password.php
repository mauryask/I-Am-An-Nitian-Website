<?php
session_start();
$_SESSION['user_idx']  = $_GET['userxplftnsp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>I Am An Nitian | Reset Password</title>
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

<div class="form"> 
<form method="post" autocomplete="off">
<input type="password" placeholder="New Password"  id="pass"/>
<input type="password" placeholder="Confirm New Password"  id="cnf_pass"/>
<button type="button" class="submit" id="submit">Submit</button>
</form>
</div>
 
</div>


<div class="copy_right"><p>Copyright &copy; 2019 | I Am An Nitian</p></div>
   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/main.js"></script>
<script>
$(document).ready(function(){


$('#pass').click(function(){
	$('#msg').css({'background':'transparent', 'border':'none', 'color':'transparent'});
})

$('#cnf_pass').click(function(){
	$('#msg').css({'background':'transparent', 'border':'none', 'color':'transparent'});
})

$('#submit').click(function(){

 $('#msg').css({'background':'transparent', 'border':'none', 'color':'transparent'});

var pass = $('#pass').val().trim();
var cnf_pass = $('#cnf_pass').val().trim();

if(pass != '' && cnf_pass != '')
{

 if(pass.length < 6)
 {
    $('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
    $('#msgx').text('Password must be of atleast 6 characters');
 }
 else if(pass != cnf_pass)
 {
    $('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
    $('#msgx').text('Password didn\'t match');
 }
 else
 {
   $.ajax({

    url:'confirm_change_pass.php',
    type:'post',
    data:{pass : pass},
    success:function(data)
    {
        if(data == 1)
        {
            $('.submit').text("wait....");
            $('#msg').css({'color':'#4F8A10', 'background':'#DFF2BF', 'border':'1px solid'});
            $('#msgx').text('Password changed successfully');
            $('.submit').prop("disabled", true); //disabling the button
            setTimeout(function(){
                window.location.replace('http://www.iamannitian.co.in/index.php');
                 // using this you can not return back to previous page
            },2000);
        }
        else if (data == 0)
        {
            $('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
            $('#msgx').text('Password change request failed');
            $('.submit').text("Submit");
            $('.submit').prop("disabled", false);   
        }
    }

   });
 }
}
else
{
    $('#msg').css({'color':'#D8000C', 'background':'#FFD2D2', 'border':'1px solid'});
    $('#msgx').text('Please fill out the credentials');
}

})
})
</script>
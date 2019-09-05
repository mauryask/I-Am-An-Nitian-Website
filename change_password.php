<!DOCTYPE html>
<html lang="en" id="<?php echo $_GET['id']; ?>">
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

<div id="msg"></div>


<div  class="forgot_password">

<div class="logo" onclick="location.href='index.php'">
<img src="images/imnitian.png"/>
<p>I Am An Nitian</p>
</div>

<div class="form"> 
<form>
<input type="password" placeholder="New Password"  id="pass"/>
<input type="password" placeholder="Confirm New Password"  id="cnf_pass"/>
<button type="button" class="submit" id="submit">Submit</button>
</form>
</div>
 
</div>


<div class="copy_right"><p>Copyright &copy; 2019 | I Am An Nitian</p></div>
   
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
$('#submit').click(function(){

var pass = $('#pass').val().trim();
var cnf_pass = $('#cnf_pass').val().trim();

if(pass != '' && cnf_pass != '')
{

 if(pass.length < 6)
 {
    $('#msg').html('<p style="color:red">Password must be of atleast 6 characters</p>');
 }
 else if(pass != cnf_pass)
 {
    $('#msg').html('<p style="color:red">Password didn\'t match</p>');
 }
 else
 {
   $.ajax({

  type:'post',
  url:'confirm_change_pass.php',
  data:{pass : pass},
    success:function()
    {
        
    }
   })
 }
}
else
{
    $('#msg').html('<p style="color:red">Please fill out the credentials</p>');
}

})
})
</script>
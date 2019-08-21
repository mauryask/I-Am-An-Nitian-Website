<?php
session_start();
$to = 'pnssoftwares7@gmail.com';
$subject = 'Welcome to I Am An Nitian';
$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>';
$message .= '<div style="display:flex;
flex-direction:row;
"><img src="http://www.iamannitian.co.in/images/imnitian.png" width="40px" height="40px"/>
<span style="font-family:'.'Dancing Script'.', cursive;
font-weight:bold;
font-size:17px;
color:red;
margin-left:7px;
margin-top:10px;
">I Am An Nitian</span>
</div>';
$message .= '<p style="margin-left:12px;">Hi ! '.$_SESSION['user_name'].'</p>';
$message .= '<p style="margin-left:12px;">Thank you to be part of I AM AN NITIAN family.</p>';
$message .= '<p style="margin-left:12px;">Stay tuned with us for latest updates of 
various NITs & Engineering.</p>';
$message .= '<div style="width:10rem;height:2px;background:#4caf50;margin-left:12px;"></div>';
$message .= '<p style="margin-left:12px;"><i>This is a system
 genrated email. Please do not reply.</i></p>';
$message .= "</body></html>";
mail($to, $subject, $message, $headers);

?>



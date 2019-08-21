<!--
@ This file consists of code for adding news and links to edit news
-->

<?php
include_once('connection.php');
session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
    exit("<div style='
    top:50%; 
    left:50%; 
    transform:translate(-50%,-50%);
    position:absolute;
    display:flex;
    flex-direction:column;
    align-items:center;
    '>
    <img src='images/access.png' width='200px' height='200px'>
    <p style='
  
    font-size:35px;
  text-align:center;
  font-weight:bold;
    '
    >Access Denied Page 404 Not Found<p>
    </div>");
}

if(isset($_POST['submit']))
{
    $subject = addslashes($_POST['subject']);
    $msg = addslashes($_POST['message']);
    $replied_by = $_SESSION['user_name'];
    $fedback_user_id=$_GET['id'];

    // sending mail to user 

    $query = "select * from feedback where id=$fedback_user_id";
    $result = mysqli_query($conn,$query);
    $email='';
    $user_name='';
    if($row=mysqli_fetch_assoc($result))
    {
      $email = $row['user_email'];
      $user_name= explode(" ",$row['user_name'])[0];
    }
    

$to =trim($email).',mauryask1732@gmail.com';
$subject = $subject;
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
$message .= '<p style="margin-left:12px;">Hi ! '.$user_name.'</p>';
$message .= '<p style="margin-left:12px;">'.$msg.'.</p>';
$message .= '<p style="margin-left:12px;">Stay tuned with us for latest updates of 
various NITs & Engineering.</p>';
$message .= '<div style="width:10rem;height:2px;background:#4caf50;margin-left:12px;"></div>';
$message .= '<p style="margin-left:12px;"><i>This is a system
 genrated mail. Please do not reply.</i></p>';
$message .= "</body></html>";
$result=mail($to, $subject, $message, $headers);
if(!$result)
{
echo  '<script>alert("failed to send mail!")</script>';
}
else
{
    echo  '<script>alert("sent successfully!")</script>'; 
    $query = 'update feedback set state=1, replied_by="'.$_SESSION['user_name'].'" 
    where id="'.$_GET['id'].'"';
    if(mysqli_query($conn, $query))
    {
     header("location:admin_feedback.php");
    } 
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>I Am An Nitian | Admin Panel</title>  
<link rel="icon" href="images/imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="css/left-menu.css" type="text/css" rel="stylesheet">
<link href="css/insert_news.css" type="text/css" rel="stylesheet">
</head>

<body onload="loadme()">


  <!--================== Preloader ==========================-->
<div id="loader">
</div>
<!--=================  Menu Button   ===================-->
<button id="show"><i class="fas fa-bars"></i></button>
<div class="main" id="main">
<p class="mainh" id="mainh" style="font-family:">Reply</p>

<div class="add-news" id="add-news">

<form method="post" enctype="multipart/form-data" autocomplete="off">

<input type="heading" name="subject" id="heading" placeholder="Subject">

<textarea placeholder="Type your message here..." name="message" id="news" rows="12" ></textarea>

<input type="submit" name="submit" id="submit" value="Reply"> 

</form>
</div>
</div>

<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="edit" type="button">edit news</button>
    <button id="feedback" type="button">Feedback</button>
    <button id="statics" type="button">statics</button>
    <button id="home" type="button">Home</button>
</div>
</div>

</body>

</html>


<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="js/main.js"></script>

<script>
 

$(document).ready(function(){

    //home button
    $("#home").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
    setTimeout(function() {
        window.location.href="index.php";
    },500);  
  })


 //edit news button
  $("#edit").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="edit_news.php";
    },500); 
  })


 //edit news button
 $("#statics").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="statics.php";
    },500); 
  })



 //feedback button
 $("#feedback").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="admin_feedback.php";
    },500); 
  })


//click to background 
$("#demo").on('click',function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
})

    /*================  Form Validation ===================*/   
    $('#submit').click(function(){
        var head = $('#heading').val();
        var text = $('#news').val();
       if( head == '' || text == '')
        {
            alert('Please fill all the fields');
            return false;
        }
      
    })

    $('#show').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX:1});
    });

})
</script>




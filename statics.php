<?php

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


include_once('connection.php');

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
<link href="css/statics.css" type="text/css" rel="stylesheet">
</head>

<body onload="loadme()">

<div id="loader">
</div>
<p class="mainh" id="mainh" style="font-family:">Statics</p>

<?php

$total_users ="";

$total_admins ="";
$query_x = "select count(*) as total_users from user";

$query_y = "select count(*) as total_admins from admin";

$result_x = mysqli_query($conn, $query_x);

$result_y = mysqli_query($conn, $query_y);

//total users

if($row = mysqli_fetch_assoc($result_x))
{
  $total_users = $row['total_users'];
}
else
{
    $total_users = 0; 
}

//total admins

if($row = mysqli_fetch_assoc($result_y))
{
  $total_admins = $row['total_admins'];
}
else
{
    $total_admins = 0;
}

?>

<div class="circle">
<div><p><?php echo  $total_admins; ?></p><p style="font-size:18px;font-family:sans-serif;">Admin</p></div>
<div><p><?php echo  $total_users; ?></p><p style="font-size:18px;font-family:sans-serif;">User</p></div>
<div><p>0</p><p style="font-size:18px;font-family:sans-serif;">CA</p></div>
<div><p>0</p><p style="font-size:18px;font-family:sans-serif;">Others</p></div>
</div>


<button id="show"><i class="fas fa-bars"></i></button>

<div class="left-menu"  id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="add" type="button">add news</button>
    <button id="edit" type="button">edit news</button>
    <button id="feedback" type="button">feedback</button>
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


// insert  news  button
   $('#add').click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
     setTimeout(function() {
         window.location.href="insert_news.php";
     },500); 
   })

   // feedback  button
   $('#feedback').click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
     setTimeout(function() {
         window.location.href="admin_feedback.php";
     },500); 
   })
 
 
// edit news button  
 $("#edit").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="edit_news.php";
    },500); 
  })


 
 $("#demo").on('click',function(){
     TweenMax.to('#demo',0.5,{scaleX: 0}); 
 })
     
 
     $('#show').on('click', function(){
         TweenMax.to('#demo',0.5,{scaleX:1});
     });
 
 })
 </script>
 





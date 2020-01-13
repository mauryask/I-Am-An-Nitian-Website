<?php
session_start(); 
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
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="css/edit_news.css" type="text/css" rel="stylesheet">
<link href="css/left-menu.css" type="text/css" rel="stylesheet">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<style>
td{
  text-align:center;
}
</style>
</head>

<body onload="loadme()">
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
<div id="loader">
</div>
<button id="show"><i class="fas fa-bars"></i></button>
<div class="mainx"  id="mainx">
    <p class="mainh">Edit fb posts</p>
 <div class="edit-news">
<table>
<tr>
 <th>Id</th>
<th>Image</th>
<th>Heading</th>
<th>News</th>
<th>Delete</th>
</tr>

<?php
$query = "select * from fb_posts order by id desc";
$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result))
{
  ?>
  <tr>
    <td style="font-weight:bold;"><?php echo $row['id']  ?></td>
    <td><?php echo '<img class="imgx" alt="news" src="'.$row['url'].'"/>' ?></td>
    
    <td class="thead"><?php  echo $row['heading']  ?></td>
    <td><?php echo $row['desp'] ?></td>
    <td> <button name="delete" onclick="location.href='delete_fb_posts.php?del=<?php echo $row['id']; ?>'">Delete</button>
  </tr>
  <?php 
}
?>

</table>
</div>
</div>

<div class="left-menu" class="popup" id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="home" type="button">Home</button>
    <button id="add" type="button" >Add news</button>
    <button id="edit" type="button">Edit news</button>
    <button id="add_fb_posts" type="button">Add fb posts</button>
    <button id="feedback" type="button" >Feedback</button>
    <button id="statics" type="button">Statics</button>
 
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


//add news button
  $("#add").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});   
    setTimeout(function() {
        window.location.href="insert_news.php";
    },500); 
  })


 //edit news button
 $("#edit").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="edit_news.php";
    },500); 
  })

//static button
$("#statics").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});   
    setTimeout(function() {
        window.location.href="statics.php";
    },500); 
  })


// add fb posts button  
$("#add_fb_posts").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="upload_posts.php";
    },500); 
  })




//feedback button
$("#feedback").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});   
    setTimeout(function() {
        window.location.href="admin_feedback.php";
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




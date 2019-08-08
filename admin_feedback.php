
<?php
include_once('connection.php');
session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
 /* exit("<div style='
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
  </div>");*/
}

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
<link href="css/left-menu.css" type="text/css" rel="stylesheet">
<link href="css/edit_news.css" type="text/css" rel="stylesheet">

<style>
table, td, th{
    text-align:center;
}
</style>

</head>

<body onload="loadme()">


  <!--================== Preloader ==========================-->
<div id="loader">
</div>
<!--=================  Menu Button   ===================-->
<button id="show"><i class="fas fa-bars"></i></button>


<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="add" type="button">add news</button>
    <button id="edit" type="button">edit news</button>
    <button id="statics" type="button">statics</button>
    <button id="home" type="button">Home</button>
</div>
</div>


<!--getting feedback part-->
<div class="mainx"  id="mainx">
    <p class="mainh">User Feedback</p>
 <div class="edit-news">
<table>
<tr>
 <th>Serial</th>
<th>Name</th>
<th>Feedback</th>
<th>Reply</th>
<th>Delete</th>
</tr>

<?php
$query = "select * from feedback";
$result=mysqli_query($conn, $query);
$count = 1;
while($row=mysqli_fetch_array($result))
{
  ?>
  <tr>
    <td style="font-weight:bold;"><?php echo $count;  ?></td>
    <td><?php echo $row['user_name'] ?></td>
    <td class="thead"><?php  echo $row['user_feedback']  ?></td>
    <td> <a href="#">Reply</a> </td>

    <td> <button name="delete" onclick="location.href='delete_feedback.php?del=<?php echo $row['id']; ?>'">Delete</button>
  </tr>
  <?php 

  $count++;
}
?>

</table>
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



 //add news button
 $("#add").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="insert_news.php";
    },500); 
  })


 //statics button
 $("#statics").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="statics.php";
    },500); 
  })


//click to background 
$("#demo").on('click',function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
})

    /*================  Form Validation ===================*/   
    $('#submit').click(function(){
        var image_name = $('#image').val();
        var head = $('#heading').val();
        var text = $('#news').val();
        if(image_name== '') 
        {
            alert('Please choose a file');
            return false;
        } 
        else if( head == '' || text == '')
        {
            alert('Please fill all the fields');
            return false;
        }
        else
        {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['png', 'gif','jpg','tif','jpeg','mp4'])== -1)
            {
                alert("invalid image format");
                $('#image').val('');
                return false;
            }
            
        }
    })

    $('#show').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX:1});
    });

})
</script>




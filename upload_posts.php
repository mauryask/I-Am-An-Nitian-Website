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
   // $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   // name column from table dropped (longblob type)

// testing

// for main image
$filetmp = $_FILES['image']['tmp_name'];
$filename  = $_FILES['image']['name'];
$filepath="fb_posts/".$filename;

// testing

    $head = addslashes($_POST['heading']);
    $news = addslashes($_POST['news']);

    $added_by = $_SESSION['user_name'];
/*===================  Getting time and date ====================*/
//getting IST
date_default_timezone_set('Asia/Kolkata');

//date
$date = date('d');

//month
$months = array("jan", "feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct","Nov", "Dec");
$month =$months[(int)date('m')-1];

//year
$year = date('Y');

//time
$hrs = (int)date('H');
if($hrs>12)
{
    $hrs= $hrs-12;
    if($hrs<10)
    {
        $hrs = "0".$hrs;
    }
    
}
else
{
    $hrs="0".$hrs;
}

$time =$hrs.date(':i A');

$full_time = $month." ".$date.", ".$year.", ".$time.", IST";

/*===================  Getting time and date end ====================*/



if(uploadex($filetmp,$filepath))
{

   $query="insert into fb_posts (heading,desp,url,added_by,added_at)  
    values('$head', '$news','$filepath','$added_by','$full_time')";
   $result = mysqli_query($conn, $query);
    if($result)  
    {
        echo  "<script>alert('Inserted successfully')</script>";
    }
    else
    {
        echo  "<script>alert('Failed To Insert!')</script>";
    }
}

}

function uploadex($filetmp,$filepath)
{
    $x = move_uploaded_file($filetmp,$filepath);
    return $x;        
}

?>

<!DOCTYPE

 html>
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
<p class="mainh" id="mainh" style="font-family:">Add Facebook Posts</p>

<!--=================  Adding News  ===================-->
<div class="add-news" id="add-news">

<form method="post" enctype="multipart/form-data" action="upload_posts.php" autocomplete="off">
<div style="display:flex;align-items:center;">
<input type="file" name="image" id="image" title="compulsory"> 
</div>

<input type="heading" name="heading" id="heading" placeholder="Heading">

<textarea placeholder="Enter Description Here..." name="news" id="news" rows="12" ></textarea>

<input type="submit" name="submit" id="submit" value="Insert" > 

</form>
</div>
</div>

<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="home" type="button">Home</button>
    <button id="add" type="button">Add news</button>
    <button id="edit" type="button">Edit news</button>
    <button id="edit_fb_posts" type="button">Edit fb posts</button>
    <button id="feedback" type="button">Feedback</button>
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


// edit fb posts button  
$("#edit_fb_posts").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="edit_fb_posts.php";
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




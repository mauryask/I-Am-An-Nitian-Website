<!--
@ This file consists of code for adding news and links to edit news
-->

<?php

session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
  exit('access denied page 404 not found');
}

include_once('connection.php');
if(isset($_POST['submit']))
{
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $head = addslashes($_POST['heading']);
    $news = addslashes($_POST['news']);
    $views=0;
    $likes=0;
    $comments=0;
    $dislikes=0;
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

    $query="insert into tbl_images (name,heading, text,views,likes,dislikes,comments, inserted_at, added_by) 
    values('$file', '$head', '$news','$views','$likes','$dislikes','$comments','$full_time', '$added_by')";
    if(mysqli_query($conn, $query))  
    {
        echo  "<script>alert('Inserted successfully')</script>";
    }
    else
    {
        echo  "<script>alert('Insertion Failed')</script>";
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
<p class="mainh" id="mainh" style="font-family:">Add News</p>

<!--=================  Adding News  ===================-->
<div class="add-news" id="add-news">

<form method="post" enctype="multipart/form-data" autocomplete="off">

<input type="file" name="image" id="image"> 

<input type="heading" name="heading" id="heading" placeholder="Heading">

<textarea placeholder="Enter News Here..." name="news" id="news" rows="12" ></textarea>

<input type="submit" name="submit" id="submit" value="Insert" > 

</form>
</div>
</div>

<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
<p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="edit" type="button">edit news</button>
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




<!--
@ This file consists of code for updating and editing news
-->
<?php

session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']))
{
  exit('access denied page 404 not found');
}

include_once('connection.php');

if(isset($_POST['update']))
{
    $id=$_GET['update'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $head = addslashes($_POST['heading']); //here add slashes is used to allow insertion of single quoptes commas
    $news = addslashes($_POST['news']);
    $query="update tbl_images set name='$file', heading='$head', text='$news' where id='".$id."'";
    if(mysqli_query($conn, $query))  
    {
        echo  "<script>alert('Updated successfully')</script>";
    }
    else
    {
        echo  "<script>alert('Upadtion Failed')</script>";
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
<link href="css/update.css" type="text/css" rel="stylesheet">
<link href="css/left-menu.css" type="text/css" rel="stylesheet">
<style>

</style>
</head>
<body>

<div class="main">

<!--=================  Menu Button   ===================-->
<button id="show"><i class="fas fa-bars"></i></button>
<p class="mainh" id="mainh" >Update News</p>
<!--=================  Editing News  ===================-->
<div class="add-news" id="add-news">
<form method="post" enctype="multipart/form-data" autocomplete="off">

<input type="file" name="image" id="image"> 
<?php
$id = $_GET['update'];
$query = "select * from tbl_images where id=".$id." ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0)
{
  $row=mysqli_fetch_array($result);
}
else
{
echo '<script>alert("Failed")</script>';
}

 echo  '<input type="heading" name="heading" id="heading"  value="'.$row['heading'].'">';

 echo '<textarea  name="news" id="news" rows="12">'.$row['text'].'</textarea>';

?>
<input type="submit" name="update" id="update" value="Update"> 

</form>

</div>
</div>

<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
    <p>Admin Panel</p>
    <button id="add" type="button" onclick="func()">add news</button>
    <button id="edit" type="button">edit news</button>
    <button id="delete" type="button">view news</button>
    <button id="statics" type="button">statics</button>
    <button id="home" type="button">Home</button>
</div>

</body>

</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>





<script>

$(document).ready(function(){
    $("#home").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0}); 
    setTimeout(function() {
        window.location.href="index.php";
    },500);  
  })

/*================  Add News ===================*/ 
  $("#add").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});   
    setTimeout(function() {
        window.location.href="insert.php";
    },500); 
  })


/*================  Editing News ===================*/   

  $("#edit").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="edit.php";
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




<script>
$(document).ready(function(){
    $('#update').click(function(){
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
})
</script>



<!--Hiding and Showing Side Menu bar-->
<script>
    $(document).ready(function(){
    $('#cut').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX: 0});
    });


    $('#show').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX:1});
    });
});

</script>

<script>
function func()
{
    document.getElementById('mainh').style.display='block';
    document.getElementById('add-news').style.display='block';
}
function fund()
{
    document.getElementById('mainh').style.display='none';
    document.getElementById('add-news').style.display='none';
}
</script>
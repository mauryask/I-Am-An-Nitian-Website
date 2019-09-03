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

if(isset($_POST['update']))
{
    $id=$_GET['update'];
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $head = addslashes($_POST['heading']); 
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
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="css/update_news.css" type="text/css" rel="stylesheet">
<link href="css/left-menu.css" type="text/css" rel="stylesheet">
<style>

</style>
</head>
<body onload="loadme()">
<div id="loader">
</div>
<div class="main">
<button id="show"><i class="fas fa-bars"></i></button>
<p class="mainh" id="mainh" >Update News</p>
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

 echo  '<input type="heading" name="heading" id="heading"  value="'.$row['heading'].'">';

 echo '<textarea  name="news" id="news" rows="12">'.$row['text'].'</textarea>';

?>
<input type="submit" name="update" id="update" value="Update"> 

</form>

</div>
</div>

<div class="left-menu" class="popup" id="demo">
    <p><?php echo "Hello! ".$_SESSION['user_name'];  ?></p>
    <div>
    <button id="add" type="button" >add news</button>
    <button id="edit" type="button">edit news</button>
    <button id="feedback" type="button">feedback</button>
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

  //feedback button
  $("#feedback").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="admin_feedback.php";
    },500); 
  })

//edit news button
$("#statics").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    setTimeout(function() {
        window.location.href="statics.php";
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

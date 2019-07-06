<?php
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
<link href="css/insert.css" type="text/css" rel="stylesheet">
<style>

</style>
</head>
<body>

<div class="main">

<!--=================  Menu Button   ===================-->
<button id="show"><i class="fas fa-bars"></i></button>

<!--=================  Adding News  ===================-->
<div class="add-news">
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
    <img src="images/cutk.png" id="cut">
    <p>Admin Panel</p>
    <button id="add" type="button">add news</button>
    <button id="delete" type="button">delete news</button>
    <button id="edit" type="button">edit news</button>
    <button id="statics" type="button">statics</button>
</div>

</body>

</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

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
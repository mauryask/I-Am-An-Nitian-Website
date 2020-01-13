<?php
include_once('connection.php');
session_start();
?>
<head>
    


<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<meta name="theme-color" content="#000">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<style>@import url('https://fonts.googleapis.com/css?family=Playfair+Display&display=swap'); </style>
<title>Campus Ambassador Portal | I Am An Nitian</title>
<link rel="icon" href="images\imnitian.png">
<link href="css/fb_posts.css" type="text/css" rel="stylesheet">
<style>
@media (max-width:921px)
{
    header nav #mnu
	{
		margin:25px 0  0 2.5rem;
    }
    
header nav  ul li{
padding-left:1.5rem;
}
}
</style>


</head>

<body onload="loadme()">
    
<body onload="loadme()">
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
<div id="loader">
</div>

   <div class="wrapper">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>

<header id="f" style="background:black;">
<div class="logo">
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li class="logo_txt"> <a href="index.php" 
style="font-family: 'Dancing Script', cursive;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">

<p id="mnu">CA Portal</p>

<ul>
<li><a href="index.php" class="homex"><i class="fas fa-home" style="font-size:21px;"></i>  Home</a></li>

<li><a href="cax_portal.php" class="homex" ><i class="fab fa-dashcube" style="font-size:20px;"></i>  Leaderboard</a></li>
<li ><a href="fb_posts.php" class="home" id="update_nav"><i  style="font-size:20px;" class="fas fa-share-alt"></i>  fb posts</a></li>

<li><a href="index.php#about" class="homex" id="about_nav"><i class="fab fa-fantasy-flight-games" style="font-size:21px;"></i>  tasks</a></li>
<li><a href="index.php#about" class="homex" id="about_nav"><i class="fas fa-poll-h" style="font-size:20px;"></i>  guidelines</a></li>
<li><a class="homex" id="user"><i class="fas fa-user-graduate" style="font-size:19px;"></i>
<?php
  if(isset($_SESSION['name'])&& !empty($_SESSION['name']))
  {
    echo $_SESSION['name'];
  }
  else
  {
    echo 'User';
  }
?>
</a>
<ul style="margin-left:-1rem;">

<?php
if( isset($_SESSION['user_type']) && !empty($_SESSION['user_type']))
{
  if($_SESSION['user_type'] == 1)
  {
    ?>
    <li><a href="edit_news.php">Admin</a></li>

    <?php
  }
}
?>

<?php if( isset($_SESSION['name']) && !empty($_SESSION['name']))
{
?>
<li><a style="cursor:pointer;"  href="logout.php" >Logout</a></li>
<?php }else{ ?>
<li><a style="cursor:pointer;"  onclick="show_log()" id="login_nav" >Login</a></li>
<li><a style="cursor:pointer;"  onclick="show_signup()" id="register_nav" >Register</a></li>
<?php } ?>

</ul>
</li>
</ul>
</nav>
<div class="menu-toggle">
<i class="fas fa-bars"></i>
</div>
<img src="images/cutk.png" class="cut_nav" style="display:none;">
</header>



<div class="container">

<div class="card">

<div class="img-container">
<img src="images/Bhopal.jpg" >
</div>

<div class="heading">
<p>This is my heading of...</p>
</div>
<button type="button">
  <span class="f">f</span> <span class="share">share</share>
</button>
</div>

<div class="card">
<div class="img-container">
<img src="images/Agartala.jpg" >
</div>
<div class="heading">
<p>This is my heading of...</p>
</div>
<button type="button">
  <span class="f">f</span> <span class="share">share</share>
</button>
</div>

<div class="card">
<div class="img-container">
<img src="images/Meghalaya.jpg" >
</div>
<div class="heading">
<p>This is my heading of...</p>
</div>
<button type="button">
  <span class="f">f</span> <span class="share">share</share>
</button>

</div>

</div>


<p class="copyright">Copyright &copy; 2019 &nbsp; | &nbsp; I Am An Nitian</p>

</div>
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>


<script>

 /*= Menu toggle =*/
 $(document).ready(function(){

if (window.matchMedia('(max-width:721px)').matches)
{

$('.cut_nav').click(function(){
  $('header').css('background','black');
  $(this).css('display','none');
  $('.menu-toggle').css('display','block');
  TweenMax.to('.active',0.5,{scaleX: 0});
})

$('.menu-toggle').click(function(){
  $('header').css('background','transparent');
  $(this).css('display','none');
  $('.cut_nav').css('display','block');
  $('.cut_nav').css('background','black');
  TweenMax.to('.active',0.4,{scaleX: 1});
})

$('#login_nav,#register_nav,#about_nav,#update_nav').click(function()
{
  $('header').css('background','black');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
})

}
})
</script>
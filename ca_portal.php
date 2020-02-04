<!--
* I AM AN NITIAN 
* v1.0
* May 17 2019
* Developer: Shubham Maurya
* National Institute Of Technology Srinagar J&K India 190006
* GitHub: https://github.com/pnstech
* LinkedIn: https://www.linkedin.com/in/cyberthreatatnit/
-->

<?php
include_once('connection.php');
session_start(); //starting session start
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<title>I Am An Nitian | CA Portal</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link rel="icon" href="images/imnitian.png">
<link href="css/ca_iit.css" rel="stylesheet"  type="text/css">
<link href="css/ca_portal.css" rel="stylesheet"  type="text/css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
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

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

 <!--================ Scroll Indicator ======================-->
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

<li><a href="cax_portal.php" class="home" ><i class="fab fa-dashcube" style="font-size:20px;"></i>  Leaderboard</a></li>
<li ><a href="fb_posts.php" class="homex" id="update_nav"><i  style="font-size:20px;" class="fas fa-share-alt"></i>  fb posts</a></li>

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

<div class="wrapper">

<div class="wrap_x">
  <div class="part_x">
    <p>Dashboard</p>
    <p>Top 10 campus Ambassadors</p>
  </div>

  <div class="part_y">

    <div class="names">
      <div class="count_x">1</div> 
      <div class="cnt_x">Abhishek Divedi</div>   
    </div>

    <div class="names">
      <div class="count_x">2</div> 
      <div class="cnt_x">Atul Kumar</div> 
    </div>

    <div class="names">
      <div class="count_x">3</div> 
      <div class="cnt_x">Shubham Maurya</div> 
    </div>

    <div class="names">
      <div class="count_x">4</div> 
      <div class="cnt_x">Nitish Yadav</div> 
    </div>

    <div class="names">
      <div class="count_x">5</div> 
      <div class="cnt_x">Abhay Mishra</div> 
    </div>

    <div class="names">
      <div class="count_x">6</div> 
      <div class="cnt_x">Bashir Ahmad</div> 
    </div>

    <div class="names">
      <div class="count_x">7</div> 
      <div class="cnt_x">Yashneet Shariya</div> 
    </div>

    <div class="names">
      <div class="count_x">8</div> 
      <div class="cnt_x">Vikram Kumar</div> 
    </div>

    <div class="names">
      <div class="count_x">9</div> 
      <div class="cnt_x">Lokesh Yadav</div> 
    </div>

    <div class="names">
      <div class="count_x">10</div> 
      <div class="cnt_x">Tarun Mishra</div> 
    </div>

   
  </div>

</div>

<div class="wrap_y">

<div class="container">

<div class="card">

<div class="circle">
<p>12</p>
</div>

<p>Your Rank</p>

</div>

<div class="card">
<div class="circle">
<p>20</p>
</div>
<p>Posts Shared</p>
</div>

<div class="card">
<div class="circle">
<p>32</p>
</div>
<p>Tasks Completed</p>
</div>

</div>



</div>


 </div>

<footer>

</footer>

</body>

</html>



<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script   type="text/javascript" src="js/main.js"></script>




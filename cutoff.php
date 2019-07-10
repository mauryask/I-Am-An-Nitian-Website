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
session_start();
?>


<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<title>I Am An Nitian | Home</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link rel="icon" href="images/imnitian.png">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/cutoff.css" type="text/css" rel="stylesheet">
<style>
.homex:hover,.sub-menu:hover{
background:rgba(0,0,0,0.8);
transition:0.3s;
}

header nav ul li a,.homex{
color:rgba(256,256,256,1);
}

header .logo ul li a{
    color:rgba(256,256,256,1);
}
    </style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top"><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

 <!--================ Scroll Indicator ======================-->
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   

<header id="f">
<div class="logo">
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;">I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="homex" >Home</a></li>
<li><a href="team.html" class="homex">Our team</a></li>
<li><a href="more-news.php" class="homex">News</a></li>
<li><a href="index.php#about" class="homex">About Us</a></li>
<li><a class="sub-menu" style="width:115px;">Exams <i class="fas fa-caret-square-down"></i></a>
<ul>
<li style="width:115px;"><a href="#">Jee</a></li>
<li style="width:115px;"><a href="#">Gate</a></li>
<li style="width:115px;"><a href="#">Neet</a></li>
<li style="width:115px;"><a href="#">Camt</a></li>
<li style="width:115px;"><a href="#">Gre</a></li>
</ul>
</li>
<li>
<button class="homex" onclick="search()" style="text-transform: uppercase;letter-spacing: 0.8px; font-weight: bold;">Search <i class="fas fa-search"></i></button>
</li>
<li><a class="homex" style="cursor:pointer; width:150px;text-align:center;margin-left:-1rem;">User

&nbsp <i class="fas fa-user-graduate"></i></a>
<ul style="margin-left:-1rem;">
<!-- Hide and Show login and php buttons -->



</ul>
</li>
</ul>
</nav>
<!--================ Mobile Version Menu ====================-->
<div class="menu-toggle">
<i class="fas fa-bars"></i>
</div>

<!--================ Search Box ====================-->
<div class="search-popup" id="searchx" style="display:none;">
    <div><input type="text"  placeholder="Search"><button><i class="fas fa-search"></i></button></div>
  </div>

</header> 

<div class="banner">
    <div class="overlay">
</div>
<div class="center">
<p>Cutoff</p>
<p class="sub-center">Cutoff of NITs amn IIts</p>
</div>
</div>


<div class="ping"><p>Will Be updated Soon</p></div>


 <!--============== Footer Section ==================-->
 <footer>
    <div class="datay">
      <div><p class="y">Colleges</p>
        <div class="linex"></div>
      <p><a href="#">IIT</a></p>
      <p><a href="#">NIT</a></p>
      <p><a href="#">IIIT</a></p>
      <p><a href="#">AIIMS</a></p>
      </div>
      <div>
          <p class="y">Exams</p>
          <div class="linex"></div>
            <p><a href="#">Jee Advance</a></p>
            <p><a href="#">Jee Mains</a></p>
            <p><a href="#">Gate</a></p>
            <p><a href="#">Neet</a></p>  
            <p><a href="#">Gre</a></p>  
          </div>
      <div><p class="y">Cutoff</p>
        <div class="linex"></div>
        <p><a href="#">IITs </a></p>
        <p><a href="#">NITs</a></p>
        <p><a href="#">IIITs</a></p>
        <p><a href="#">AIIMS</a></p></div>
      <div><p class="y">Links</p>
        <div class="linex"></div>
        <p><a href="#">Disclaimer</a></p>
        <p><a href="#">College Reviews</a></p>
        <p><a href="#">College Ranking</a></p>
        <p><a href="#">About Us</a></p>
        <p><a href="#">News</a></p></div>
    </div>
  <div class="datad">
  <p class="x">Feel Free To Contact Us</p>
  <p>iamannitian@gmail.com &nbsp &nbsp| &nbsp +91-9055667606 &nbsp | &nbsp  +91-9055667606</p>
  </div>
<!--============== Bottom Container =====================-->
 <div class="container">
<p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN &nbsp | &nbsp DESIGNED AND DEVELOPED BY SHUBHAM MAURYA &nbsp|&nbsp NIT SRINAGAR</p>
</div>
</footer>

</body>
</html>
<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  Local Js Files  ==================-->
<script src="js/main.js" type="text/javascript"></script>


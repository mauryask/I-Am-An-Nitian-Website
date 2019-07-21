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
include_once('db/connection.php');
session_start(); //starting session start
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
<link href="css/ranking.css" rel="stylesheet"  type="text/css">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<style>

</style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

<div class="wrapper">
 <!--================ Scroll Indicator ======================-->
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   

<header id="f">
<div class="logo">
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="home" >Home</a></li>
<li><a href="team.html" class="homex">Our team</a></li>
<li><a href="more-news.php" class="homex" >News</a></li>
<li><a href="#about" class="homex" id="about_nav">About Us</a></li>
<li><a class="sub-menu" style="width:115px;" id="exam">Exams <i class="fas fa-caret-square-down"></i></a>
<ul>
<li style="width:115px;"><a href="#">Jee</a></li>
<li style="width:115px;"><a href="#">Gate</a></li>
<li style="width:115px;"><a href="#">Neet</a></li>
<li style="width:115px;"><a href="#">Camt</a></li>
<li style="width:115px;"><a href="#">Gre</a></li>
</ul>
</li>
<li>
<button onclick="search()" style="text-transform: uppercase;letter-spacing: 0.8px; font-weight: bold;" id="searching">Search <i class="fas fa-search"></i></button>
</li>
<li><a class="homex" style="cursor:pointer; width:150px;text-align:center;margin-left:-1rem;" id="user">
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
&nbsp <i class="fas fa-user-graduate"></i></a>
<ul style="margin-left:-1rem;">
<!-- Hide and Show login and php buttons -->

<?php
if( isset($_SESSION['user_type']) && !empty($_SESSION['user_type']))
{
  if($_SESSION['user_type'] == 1)
  {
    echo '<li><a href="edit_news.php" class="homex">Admin</a></li>';
  }
}
?>

<?php if( isset($_SESSION['name']) && !empty($_SESSION['name']))
{
?>
<li><a style="cursor:pointer;"  href="logout.php" >Logout</a></li>
<?php }else{ ?>
<li><a style="cursor:pointer;"  onclick="show_log()" id="login_nav">Login</a></li>
<?php } ?>

</ul>
</li>
</ul>
</nav>
<!--================ Mobile Version Menu ====================-->
<div class="menu-toggle">
<i class="fas fa-bars"></i>
</div>
<img src="images/cutk.png" class="cut_nav" style="display:none;">

<!--================ Search Box ====================-->
<div class="search-popup" id="searchx" style="display:none;">
    <div><input type="text"  placeholder="Search"><button><i class="fas fa-search"></i></button></div>
  </div>

<style>
  @media (max-width:991px){

  }
  </style>

</header>



<div class="banner">
<div class="center">
<p>NITs Ranking <span id="rank_yr">2019</span></p>
<p class="sub-center">rankings are based on nirf survey</p>
</div>
</div>


<div class="clg">
<p class="wlc-content">In publishing and graphic design, Lorem
 ipsum is a placeholder text commonly used 
 to demonstrate the visual form of a document
  without relying on meaningful content
   (also called greeking). Replacing the 
   actual content with placeholder text
 allows designers to design the form 
 of the content before the content itself</p>
 <p class="wlc-content">
 without relying on meaningful content
   (also called greeking). Replacing the 
   actual content with placeholder text
 allows designers to design the form 
 of the content before the content itself
  has been produced.
  actual content with placeholder text
 allows designers to design the form 
 of the content before the content itself</p>

<table>
<th>Serial No.</th>
<th>NIT Name</th>
<th>Overall Ranking <span id="change_rk"> 2019</span></th>
<th>NIT Ranking <span  id="change_rs">2019</span></th>
<tbody id="rank_a">

</tbody>


</table>

<img src="images/adx.jpg" class="ad">

<div class="linkx">
<p class="links">Useful Links</p>
<div class="line"></div>
<p><a href="#" class="x" id="click_p">NITs Ranking 2019</a></p>
<p><a href="#" class="x" id="click_a">NITs Ranking 2018</a></p>
<p><a href="#" class="x" id="click_b">NITs Ranking 2017</a></p>
<p><a href="#" class="x" id="click_c">NITs Ranking 2016</a></p>
<p><a href="#" class="x" id="click_d">NITs Ranking 2015</a></p>
</div>
</div>


 <!--============== Footer Section ==================-->
  <footer>
    <div class="datay">
              
      <div><p class="y">Colleges</p>
        <div class="linex" id="lx"></div>
      <p><a href="#">IIT</a></p>
      <p><a href="#">NIT</a></p>
      <p><a href="#">IIIT</a></p>
      <p><a href="#">AIIMS</a></p>
      </div>
      <div>
          <p class="y">Exams</p>
          <div class="linex" id="ly"></div>
            <p><a href="#">Jee Advance</a></p>
            <p><a href="#">Jee Mains</a></p>
            <p><a href="#">Gate</a></p>
            <p><a href="#">Neet</a></p>  
            <p><a href="#">Gre</a></p>  
          </div>


      <div><p class="y">Cutoff</p>
        <div class="linex" id="lz"></div>
        <p><a href="#">IITs </a></p>
        <p><a href="#">NITs</a></p>
        <p><a href="#">IIITs</a></p>
        <p><a href="#">AIIMS</a></p></div>

      <div><p class="y">Links</p>
        <div class="linex" id="la"></div>
        <p><a href="#">Disclaimer</a></p>
        <p><a href="#">College Reviews</a></p>
        <p><a href="#">College Ranking</a></p>
        <p><a href="#">About Us</a></p>
        <p><a href="#">News</a></p></div>
        
    </div>


  <div class="datad">
  <p class="x">Feel Free To Contact Us</p>
  <p id="cont">iamannitian@gmail.com &nbsp &nbsp| &nbsp +91-9055667606 &nbsp | &nbsp  +91-9055667606</p>
 <span id="respo_contact">
 <P>iamannitian@gmail.com</p> 
 <P>+91-9055667606</p> 
 <P>+91-9055667606</p> 
   </span>
</div>
<!--============== Bottom Container =====================-->
 <div class="container">
<p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developer">&nbsp | &nbsp DESIGNED AND DEVELOPED BY SHUBHAM MAURYA &nbsp|&nbsp NIT SRINAGAR</span></p>
<p id="and_copy" class="copyright">Developed by Shubham Maurya</p>
</div>
</footer>
</div>
</body>
</html>

<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

<script   type="text/javascript" src="js/main.js"></script>

<script>
var id;
$(document).ready(function(){
//rank 2019 on loading the page
   id=1;
    $('#rank_a').load("get_ranking.php", {id:id});
     
//rank 2019 on clicking button

$('#click_p').click(function(){
  window.scroll(0,0);
  id=1;
    $('#rank_a').load("get_ranking.php", {id:id},function(){
      $('#rank_yr').text("2019");
      $('#change_rk').text('2019');
      $('#change_rs').text('2019');
    });
    
      //hide this button
      $(this).hide();
          //show remaining buttons
   $('#click_a').show();
   $('#click_b').show();
   $('#click_c').show();
   $('#click_d').show();
});

  //rank 2018
  $('#click_a').click(function(){
  window.scroll(0,0); 
    id=2;
    $('#rank_a').load("get_ranking.php", {id:id},function(data, status)
    {
      $('#rank_yr').text("2018");
      $('#change_rk').text('2018');
      $('#change_rs').text('2018');
    });
     //hide this button
     $(this).hide();
         //show remaining buttons
   $('#click_p').show();
   $('#click_b').show();
   $('#click_c').show();
   $('#click_d').show();
  });

//rank 2017
$('#click_b').click(function(){
    window.scroll(0,0); 
    id=3;
    $('#rank_a').load("get_ranking.php", {id:id},function(data, status)
    {
      $('#rank_yr').text("2017");
       $('#change_rk').text('2017');
      $('#change_rs').text('2017');
    });
     //hide this button
     $(this).hide();
     //show remaining buttons
   $('#click_a').show();
   $('#click_p').show();
   $('#click_c').show();
   $('#click_d').show();
  });

  //rank 2016
  $('#click_c').click(function(){
    window.scroll(0,0); 
    id=4;
    $('#rank_a').load("get_ranking.php", {id:id},function(data, status)
    {
      $('#rank_yr').text("2016");
       $('#change_rk').text('2016');
      $('#change_rs').text('2016');
    });
     //hide this button
     $(this).hide();
         //show remaining buttons
   $('#click_a').show();
   $('#click_b').show();
   $('#click_p').show();
   $('#click_d').show();
  });

//rank 2015
$('#click_d').click(function(){
    window.scroll(0,0); 
    id=5;
    $('#rank_a').load("get_ranking.php", {id:id},function(data, status)
    {
      $('#rank_yr').text("2015");
       $('#change_rk').text('2015');
      $('#change_rs').text('2015');
    });
     //hide this button
     $(this).hide();
         //show remaining buttons
   $('#click_a').show();
   $('#click_b').show();
   $('#click_c').show();
   $('#click_p').show();
  });

});


 /*==================== Menu toggle =========================*/

 $(document).ready(function(){

if (window.matchMedia('(max-width:721px)').matches)
{
  
  $('.cut_nav').click(function(){
    $(this).css('display','none');
    $('.menu-toggle').css('display','block');
    TweenMax.to('.active',0.5,{scaleX: 0});
  })

  $('.menu-toggle').click(function(){
    $(this).css('display','none');
    $('.cut_nav').css('display','block');
    TweenMax.to('.active',0.5,{scaleX: 1});
  })


$('#login_nav').click(function()
{
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
})


$('#about_nav').click(function()
{
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
})


}
})
</script>


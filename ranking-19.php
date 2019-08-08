<!--
* I AM AN NITIAN 
* v1.0
* May 17 2019
* Developer: Shubham Maurya
* NIT Srinagar J&K India 190006
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
<title>NITs Ranking 2019 | I Am An Nitian</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="icon" href="images/imnitian.png">

<link href="css/ranking.css" rel="stylesheet"  type="text/css">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<style>
@media (max-width:921px)
{
  .center{
    margin-top:2.5rem;
  }

  .linkx{
    margin-top:3rem;
   margin-bottom:20px;
  }
}

.wrapper{
  margin-top:6rem;
}
</style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

 <!--================ Scroll Indicator ======================-->
 <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   

<div class="wrapper">


  <header id="f" style="background:black;">
<div class="logo" >
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li class="logo_txt"><a href="index.php" style="font-family: 'Dancing Script', cursive;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="homex" >Home</a></li>
<li><a href="more-news.php" class="homex" >News</a></li>
<li><a href="index.php#updf" class="homex" >Updates</a></li>
<li><a href="index.php#about" class="homex" id="about_nav">About Us</a></li>

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
<li><a style="cursor:pointer;"  onclick="show_signup()" id="register_nav">Register</a></li>
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

</header>          
 


<div class="center">
<p>NITs Ranking 2019</p>
<p class="courtesy" ><span style="font-family:'Playfair Display', serif;
font-weight:bold;">Courtesy:</span> National institute rankgin framework 
(ministry of human resource development)</p>
</div>


<div class="clg">
<p class="wlc-content">
  The National Institutional Ranking 
  Framework (NIRF) was approved by the MHRD and launched by 
  Honourable Minister of Human Resource Development 
  on 29th September 2015.
</p>
<p class="wlc-content">
    This framework outlines a methodology to rank institutions
    across the country. The methodology draws from the 
    overall recommendations broad understanding arrived at by 
    a Core Committee set up by MHRD, to identify the broad 
    parameters for ranking various universities and
      institutions. The parameters broadly cover “Teaching,
      Learning and Resources,” “Research and Professional 
      Practices,” “Graduation Outcomes,”
        “Outreach and Inclusivity,” and “Perception”.</p>

 <div class="search_clg">
 <p>Search : </p>
<input type="search" id="search" placeholder="eg. srinagar">
</div>

<table>
  <tr>
<th>Serial</th>
<th>NIT Name</th>
<th>Overall Rank</th>
<th>NIT Rank </th>
</tr>
<tbody id="rank_19">
<tr>
<td>1</td>
<td>NIT Trichy</td>    
<td>6,84,333</td>
<td>4</td>
</tr>

<tr>
<td>2</td>
<td>NIT Rourkela</td>
<td>5,49,333</td>
<td>16</td>
</tr>

<tr>
<td>3</td>
<td>NIT Suratkal</td>
<td>7,13,333</td>
<td>3</td>
</tr>

<tr>
<td>4</td>
<td>NIT Warangal</td>
<td>7,69,833</td>
<td>1</td>
</tr>

<tr>
<td>5</td>
<td>NIT Calicut</td>
<td>6,51,667</td>
<td>5</td>
</tr>

<tr>
<td>6</td>
<td>VNIT Nagpur</td>
<td>5,48,667</td>
<td>17</td>
</tr>

<tr>
<td>7</td>
<td>NIT Kuruksetra</td>
<td>6,23,333</td>
<td>6</td>
</tr>

<tr>
<td>8</td>
<td>MNNIT Allahabad</td>
<td>7,21,000</td>
<td>2</td>
</tr>

<tr>
<td>9</td>
<td>NIT Durgapur</td>
<td>4,96,667</td>
<td>22</td>
</tr>

<tr>
<td>10</td>
<td>NIT Silchar</td>
<td>4,90,000</td>
<td>24</td>
</tr>

<tr>
<td>11</td>
<td>MNIT Jaipur</td>
<td>5,92,333</td>
<td>8</td>
</tr>

<tr>
<td>12</td>
<td>SNIT Surat</td>
<td>6,04,667</td>
<td>7</td>
</tr>

<tr>
<td>13</td>
<td>NIT Hamirpur</td>
<td>5,33,667</td>
<td>18</td>
</tr>

<tr>
<td>14</td>
<td>MANIT Bhopal</td>
<td>5,66,667</td>
<td>11</td>
</tr>

<tr>
<td>15</td>
<td>NIT Meghalaya</td>
<td>4,10,000</td>
<td>28</td>
</tr>

<tr>
<td>16</td>
<td>NIT Agartala</td>
<td>4,69,000</td>
<td>27</td>
</tr>

<tr>
<td>17</td>
<td>NIT Raipur</td>
<td>5,66,667</td>
<td>12</td>
</tr>

<tr>
<td>18</td>
<td>NIT Goa</td>
<td>5,63,333</td>
<td>13</td>
</tr>

<tr>
<td>19</td>
<td>NIT Jalandhar</td>
<td>5,71,667</td>
<td>10</td>
</tr>

<tr>
<td>20</td>
<td>NIT Jamshedpur</td>
<td>5,73,333</td>
<td>9</td>
</tr>

<tr>
<td>21</td>
<td>NIT Patna</td>
<td>5,50,000</td>
<td>15</td>
</tr>

<tr>
<td>22</td>
<td>NIT Manipur</td>
<td>4,71,667</td>
<td>26</td>
</tr>

<tr>
<td>23</td>
<td>NIT Puducherry</td>
<td>4,96,667</td>
<td>23</td>
</tr>

<tr>
<td>24</td>
<td>NIT Nagaland</td>
<td>3,86,667</td>
<td>29</td>
</tr>

<tr>
<td>25</td>
<td>NIT Srinagar</td>
<td>5,57,333</td>
<td>14</td>
</tr>

<tr>
<td>26</td>
<td>NIT Delhi</td>
<td>5,08,667</td>
<td>21</td>
</tr>

<tr>
<td>27</td>
<td>NIT Andhra Pradesh</td>
<td>---</td>
<td>---</td>
</tr>

<tr>
<td>28</td>
<td>NIT Arunachal Pradesh</td>
<td>5,23,667</td>
<td>19</td>
</tr>

<tr>
<td>29</td>
<td>NIT Uttrakhand</td>
<td>4,73,667</td>
<td>25</td>
</tr>

<tr>
<td>30</td>
<td>NIT Sikkim</td>
<td>5,16,667</td>
<td>20</td>
</tr>

<tr>
<td>31</td>
<td>NIT Mizoram</td>
<td>3,83,333</td>
<td>30</td>
</tr>
</tbody>
</table>



<div class="linkx">
<p class="links"> Explore More</p>
<div class="line"></div>
<p><a href="ranking-18.php" class="x">NITs Ranking 2018</a></p>
<p><a href="rank-placement-wise.php" class="x" > Ranking Based On Placements</a></p>
<p><a href="gate_topper_list.php" class="x" >Nitians who cracked GATE 2019</a></p>
<p><a href="ese_topper_list.php" class="x" >Nitians who cracked ESE 2019</a></p>
<p><a href="placement.php" class="x" >B.Tech. Placements</a></p>
<p><a href="placement2.php" class="x" >M.Tech. Placements</a></p>
</div>
</div>


</div>




<!--============== Signup Popup ==================-->
<div class="signup" id="sign">
<div class="sign-card">
 <div class="sign-img">
  <div class="links">
    <p class="p1">Quick Links</p>
    <div class="msgx" ><p id="msgx" ></p></div>
    <ul>
     <a href="ranking-19.php"> <li>Ranking</li></a>
     <a href="placement.php"> <li>Placements</li></a>
     <a href="story.php"> <li>Success Stories</li></a>
     <a href="more-news.php"> <li>News</li></a>
     <a onclick="updf();"> <li>Updates</li></a>
      </ul>
<script>
function updf()
{
  TweenMax.to('.signup',0.5,{scaleY: 0});
  window.location = "index.php#updf";
}
 </script>
    <p class="p2"><a href="#">privacy policy</a></p>
  </div>
 </div>
 <div class="sign-form">
   <img class="cancel" onclick="cancel()" src="images/cut.png">
    <p class="mainh">Register Here</p>
    <div class="msgx"  id="msgk"><p id="msgy"></p></div>
   <div>
     <form method="post" autocomplete="off">
   <input autocomplete="off" type="text"  name="name"  id="name" placeholder="Name"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <input   autocomplete="off"  type="text" name="user_email" id="user_email"  placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <input  type="text"  name="phone" id="phone" placeholder="Mobile Number"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <select name="clg" id="clg"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
      <option>Select College</option>
      <option>NIT Srinagar</option> 
      <option>NIT Srinagar Silchar</option>
      <option>NIT Srinagar Trichy</option>
      <option>Motilal Nehru Institute Of Technology Allahabad</option>
      <option>Malviya Natioanl Institute Of Technology Jaipur</option>
      <option>Other</option>
      </select>
      <select name="state" id="state"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <option>Select Your State</option>
          <option>Uttar Pradesh</option>
          <option>Jammu and Kashmir</option>
          <option>Rajsthan</option>
          <option>Tamilnadu</option>
          <option>Uttrakhand</option>
          <option>Bihar</option>
          </select>
          <input  autocomplete="off" name="user_pass" id="user_pass" type="password" placeholder="Password"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <input autocomplete="off" type="password"  id="cnf_pass" name="cnf_pass" placeholder="Confirm Password" onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <button name="register" id="register" type="button"   class="register">Register</button>
        </form>
         <p> <a onclick="show_log();cancel();">already a member? login</a></p>
  </div>
 </div>
</div>
</div>
<!--=============== Login Popup =================-->
<div class="login" id="log" >
<div class="log-card">
    <img class="cancel-log"  src="images/cut.png" onclick="cancel_log()">
<div>
<div class="log-msg"  ><p id="message"><p></div>
  <form  method="post" autocomplete="off">
  <input  id="email" type="text" autocomplete="off" placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
  <input autocomplete="off"  id="pass" type="password" placeholder="Password"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
<div class="select" id="select">
  <input type="radio" name="user" id="user" value="1" checked>&nbsp <label class="lab1">User</label>
  <input type="radio" name="user" id="admin" value="2">&nbsp <label>Admin</label>
 </div>
  <button type="button"  name="login" id="login">Login</button>
</form>
  <p class="signx"><a onclick="show_signup();cancel_log();">new member? register</a></p>
</div>
</div>
</div>






 <!--============== Footer Section ==================-->
  <footer>

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
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developer">&nbsp | &nbspAll Rights Reserved</span></p>
<p id="and_copy" class="copyright">All rights reserved</p>
</div>
</footer>

</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<!--==================  SweetAlert CDN  ==================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script src="js/main.js" type="text/javascript"></script>


<script>
 /*==================== Search ranking =========================*/
 $(function()
{ //instead of $(document).ready(function(){}) you ncan use this short hand property
    $('#search').on('keyup',function(){

  var value = $(this).val().trim().toLowerCase();
         $('#rank_19 tr').filter(function(){
             $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
         })
    })
})


/*==================== Menu toggle =========================*/

$(document).ready(function(){

if (window.matchMedia('(max-width:721px)').matches)
{

$('.cut_nav').click(function(){
  $(this).css('display','none');
  $('.menu-toggle').css('display','block');
  TweenMax.to('.active',0.5,{scaleX: 0});
  $('nav').css('z-index', '1');
  $('.logo').css('marginLeft', '0px');
  $('.logo').css('marginTop', '0px');
  $('.logo_txt').css('marginTop', '0px');

  setTimeout(function(){
  
    $('header').css('background', 'black');
  
  },200)

})

$(window).scroll(function(){
$('header').css('background', 'black');
})



$('.menu-toggle').click(function(){
  $(this).css('display','none');
  $('.cut_nav').css('display','block');

  $('nav').css('z-index', '4');

  $('header').css('background', 'transparent');
  $('.cut_nav').css('background','black');
  TweenMax.to('.active',0.4,{scaleX: 1});

  setTimeout(function(){
    $('.logo').css('marginLeft', '59px');
    $('.logo').css('marginTop', '18px');
    $('.logo_txt').css('marginTop', '10px');
  },200);

  setTimeout(function(){
    $('nav').css('z-index', '-1');
  },350);
 
})
$('#login_nav').click(function()
{
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
$('header').css('background', 'black');
$('.logo_txt').css('marginTop', '0px');
})

$('#register_nav').click(function(){
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
$('header').css('background', 'black');
$('.logo_txt').css('marginTop', '0px');
})

$('#about_nav').click(function()
{
$('.logo').css('marginLeft', '0px');
$('.logo').css('marginTop', '0px');
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
})

}
})
</script>


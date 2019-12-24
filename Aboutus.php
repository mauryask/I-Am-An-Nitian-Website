
<?php
include_once('connection.php');
session_start(); 
?>


<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">   
<head>
<title>I Am An Nitian | About Us</title>
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
<link href="css/Aboutus.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/login_register.css" rel="stylesheet"  type="text/css">
</head>

<body onload="loadme()">
    <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
  <div id="loader">
  </div>
   <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div> 
  <div class="wrapper" >
  <header id="f" style="background:black;">
  <div class="logo">
  <ul>
  <li><a href="index.php"><img src="images\imnitian.png"></a></li>
  <li class="logo_txt"> <a href="index.php" 
  style="font-family: 'Dancing Script', cursive;" >I AM AN NITIAN</a></li>
  </ul>
  </div>
  <nav class="active">
  
  <p id="mnu">MENU</p>
  
  <ul>
  <li><a href="index.php" class="homex" >Home</a></li>
  
  <li><a href="more-news.php" class="homex" >News</a></li>
  <li ><a href="index.php#updf" class="homex" id="update_nav">Updates</a></li>
  
  <li><a href="Aboutus.php" class="home" id="about_nav">About Us</a></li>
  
  <li><a class="homex" id="user">
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

        <div class="main">
            <pre><h1>About us</h1>
            
<b>I AM AN NITIAN </b>
<p class="about_us">
This line is not just a combination of some words but resembles the feeling of pride
in each one of us that we convey to this world that I AM AN NITian!
Keeping this same feeling of pride and oneness, a page with same name and zeal 
was founded about 2 years ago with an objective to bring all the NITians together and 
provide them a platform on social media where<b>active exchange of ideas/news/information could take place.</b>
Founded by an NITian himself at NIT Silchar, this page became one of the fastest growing and liked page on Facebook, 
having active admins from almost all NITs across India.We know many of you support this initiative on social media, but we
would like to extend our invitation to each one of you to be a
part of this page and initiative by liking our FB page.... 
The link to the page is provided along...We already have 72K+ followers on our fb page & 8K+ followers 
on Instagram handle. We are growing preety well in Youtube too. 
</pre>
<br>

<a target="_blank" href="https://m.facebook.com/iamannitian "><img src="images/facebook.svg"></a> &nbsp;
<a target="_blank" href="https://instagram.com/i_am_an_nitian/"><img src="images/instagram.svg"></a> &nbsp;
<a target="_blank" href="https://m.youtube.com/iamannitian"><img src="images/ytb.jpg"></a> &nbsp;
<br>

  </p>

        </div>

    </div>
    </div>



<!--= Signup Popup =-->
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

    <p class="p2"><a href="privacy_policy.php">privacy policy</a></p>
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
      <option> NIT Srinagar </option>
<option> NIT Uttarakhand </option>
<option> NIT Manipur  </option>
<option> NIT Mizoram  </option>
<option> NIT Nagaland </option>
<option> NIT Agartala </option>
<option> NIT Meghalaya </option>
<option> NIT Arunachal Pradesh </option>
<option> NIT Sikkim </option>
<option> NIT Silchar </option>
<option> NIT Hamirpur </option>
<option> NIT Jamshedpur </option>
<option> NIT Jalandhar </option>
<option> NIT Durgapur </option>
<option> MNIT Jaipur </option>
<option> NIT Kurukshtera </option>
<option> NIT Andhra Pradesh </option>
<option> NIT Patna </option>
<option> MANIT Bhopal </option>
<option> NIT Goa </option>
<option> NIT Puducherry </option>
<option> NIT Delhi </option>
<option> NIT Raipur </option>
<option> NIT Calicut </option>
<option> NIT Rourkela </option>
<option> VNIT Nagpur </option>
<option> NIT Trichy </option>
<option> NIT Warangal </option>
<option> MNNIT Allahabad</option>
<option> SVNIT Surat </option>
<option> NIT Surathkal </option>
<option> Other </option>
      </select>
      <select name="state" id="state"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <option>Select Your State</option>
          <option> Uttar Pradesh </option>
<option> Bihar </option>
<option> Rajasthan  </option>
<option> Madhya Pradesh  </option>
<option> Maharashtra </option>
<option> Andhra Pradesh </option>
<option> Arunachal Pradesh </option>
<option> Assam</option>
<option> Chhattisgarh </option>
<option> Odisha </option>
<option> Goa </option>
<option> Gujarat </option>
<option> Haryana </option>
<option> Himachal Pradesh </option>
<option> Jammu and Kashmir </option>
<option> Jharkhand </option>
<option>  Karnataka </option>
<option> Kerala </option>
<option> Manipur </option>
<option> Mizoram </option>
<option> Tripura </option>
<option> Nagaland </option>
<option> Punjab </option>
<option> Sikkim </option>
<option> Tamilnadu </option>
<option> Uttarakhand </option>
<option> West Bengal </option>
<option> Telangana </option>
<option> Andaman and Nicobar Islands </option>
<option> Chandigarh </option>
<option> Dadar and Nagar Haveli </option>
<option> Daman and Diu </option>
<option> Delhi </option>
<option> Lakshadweep </option>
<option> Puducherry </option>
<option> Laddakh </option>
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
<!--= Login Popup =-->
<div class="login" id="log" >
<div class="log-card">
    <img class="cancel-log"  src="images/cut.png" onclick="cancel_log()">
<div>
<div class="log-msg"  ><p id="message"><p></div>
  <form  method="post" autocomplete="off">
  <input  id="email" type="text" autocomplete="off" placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
  <input autocomplete="off"  id="pass" type="password" placeholder="Password"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
<div class="select" id="select">
  <input type="radio" name="user" id="usert" value="1" checked>&nbsp <label class="lab1">User</label>
  <input type="radio" name="user" id="admin" value="2">&nbsp <label>Admin</label>
 </div>
  <button type="button"  name="login" id="login">Login</button>
</form>
  <p class="signx"><a onclick="show_signup();cancel_log();">new member? register</a></p>
</div>
</div>
</div>





    
   <footer>
  <div class="datad">
  <p class="x">Feel Free To Contact Us</p>
  <p id="cont">rajeshkmr201@gmail.com &nbsp &nbsp| &nbsp +91-6202590504 &nbsp | &nbsp  +91-8130512823</p>
    <p id="cont" style="line-height:30px;">
     <a  href ="Aboutus.php"  >About us</a>&nbsp &nbsp| &nbsp
     <a  href ="Privacypolicy.html">Privacy policy </a> &nbsp | &nbsp
    <!-- <a  href ="Contactus.html">Contact us </a> &nbsp | &nbsp-->
     <a  href ="Term&Condition.html" >Terms & Conditions</a>
</p>

 <span id="respo_contact">
 <P>rajeshkmr201@gmail.com</p> 
 <P>+91-6202590504</p> 
 <P>+91-8130512823</p> 
   </span>
</div>
<div class="container">
<!--<p id="and_copy" class="copyright hov" onclick="location.href='Aboutus.html'">About us</p>-->
<!--<p id="and_copy" class="copyright hov" onclick="location.href='Privacypolicy.html'">privacy policy</p>-->
<!--<p id="and_copy" class="copyright hov" onclick="location.href='Term&Condition.html'">Terms & Conditions</p>-->

<p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developerx">&nbsp | &nbspAll Rights Reserved</span></p>

<p class="copyright" id="developer">Developed by | Shubham Maurya | NIT SXR
<span id="github">| <a  id="hover" href="https://github.com/pnstech" target="_blank" >Github</a></span>
 <span id="github">| <a  href="https://www.linkedin.com/in/cyberthreatatnit" target="_blank" >Linkedin</a></span>
 </p>

</div>
</footer>

</body>

</html>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>


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

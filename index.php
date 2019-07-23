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
<!--  Disabling double tap to zoom in mobile version -->
<meta name="viewport" content= "width=device-width, user-scalable=no">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link rel="icon" href="images/imnitian.png">

<link href="css/animate.css" rel="stylesheet"  type="text/css">
<link href="css/ask.css" rel="stylesheet"  type="text/css">
<link href="css/explore.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet"  type="text/css">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/popup.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/notification.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style></style>
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
<li class="logo_txt"> <a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;" >I AM AN NITIAN</a></li>
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


<!--================ Main Banner ====================-->
<div class="banner"> 
  <div class="overlay"></div>

<div class="textx">
<p class="dynamic-text" data-aos='fade-up' data-aos-duration="900">I AM AN <span id="dyno"><br/></span><span class="text"></span><p>
<p class="msg" data-aos='fade-up' data-aos-duration="900" data-aos-delay="500">Join The Biggest Student Community</p>

<button class="join" onclick="show_signup()" data-aos='fade-up' data-aos-duration="800" data-aos-delay="600"> Join Now</button>

<div class="social">
    <a  target="_blank" href="https://www.facebook.com/iamannitian" alt="facebook"><img  class="svg" src="images/facebook.svg"  ></a>
    <a href="https://www.instagram.com/i_am_an_nitian/" target="_blank"  alt="instagram"><img  class="svg" src="images/instagram.svg" ></a>
    <a href="#"><img  class="svg" src="images/twitter.svg" alt="twitter"></a>
    <a href="#"><img  class="svg" src="images/linkedin.svg" alt="linkedin"></a>
</div>
</div>
<div class="center">
<div class="down">
</div> 
</div>
</div>
<!--====================  Notification Bell   ========================-->
<div class="nt_img" style="display:none;">
<img src="images/notificationx.svg" class="notify" onclick="show()" >
<span id="count"></span> 
</div>
<!--============== Notification Popup ==================-->
<div id="notify-popup"></div>
<!--================ Explore Section ====================-->
<div class="explore" >
  <p class="main-expo" data-aos="fade-up" data-aos-duration="900">Explore</p>
  <div class="expo-line" data-aos="fade-up" data-aos-duration="900"></div>

  <div class="expo exc" style="margin-top:2rem;">
   <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-left" data-aos-duration="800" data-aos-delay="300">
     <img src="images/school.svg">
     <p>Colleges</p>
    </div>
    
 <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-left" data-aos-duration="800" data-aos-delay="450">
      <img src="images/exam.svg">
      <p>Exams</p>
     </div>
     
     <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-left" data-aos-duration="800" data-aos-delay="600">
          <img src="images/stage.svg" >
          <p>College Fests</p>
         </div>
       
   <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-left" data-aos-duration="800" data-aos-delay="750">
      <img src="images/research.svg">
      <p>Cutoff</p>
     </div>
   
     <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-left" data-aos-duration="800" data-aos-delay="900">
        <img src="images/review.svg">
        <p>College Reviews</p>
       </div>
  </div>
  <div class="expo exc">     
  <div class="appx" onclick="sweet_alert()" data-aos="flip-right" data-aos-duration="800" data-aos-delay="1000">
        <img src="images/books.svg">
        <p>Donate Books</p>
       </div>
       
      <div class="appx" onclick="sweet_alert()" id="respo" data-aos="flip-right" data-aos-duration="800" data-aos-delay="850">
         <img src="images/project.svg">
         <p>Sell Project</p>
        </div>
         <div class="appx" onclick="location.href='ranking-19.php'" data-aos="flip-right" data-aos-duration="800" data-aos-delay="700">
      <img src="images/infographic.svg">
      <p>College Ranking</p>
     </div>
       
         <div class="appx" onclick="location.href='placement.php'" data-aos="flip-right" data-aos-duration="800" data-aos-delay="550">
            <img src="images/reunion.svg">
            <p>Placements Data</p>
           </div>
           <div class="appx" onclick="location.href='story.php'" data-aos="flip-right" data-aos-duration="800" data-aos-delay="400">
          <img src="images/growth.svg">
          <p>Success Stories</p>
         </div>
     </div>
  <!--=========================== Mobile version horizontal tabs ======================-->
<div class="mob-expo" style="margin-top:3rem;">
<div class="appx_expo" onclick="sweet_alert()"  id="appx_left">
  <img src="images/school.svg">
  <p>Colleges</p>
 </div>
 
<div  class="appx_expo"" onclick="sweet_alert()" >
 <img src="images/exam.svg">
   <p>Exams</p>
  </div>
  
  <div  class="appx_expo" onclick="sweet_alert()" >
     <img src="images/stage.svg" >
       <p>College Fests</p>
      </div>

    
<div  class="appx_expo" onclick="sweet_alert()" >
   <img src="images/research.svg">
   <p>Cutoff</p>
  </div>

  <div  class="appx_expo" onclick="sweet_alert()" id="appx_right">
    <img src="images/review.svg">
     <p>College Reviews</p>
    </div>


<!--================ Second explore tabs ==============-->

<div class="appx_expo" onclick="sweet_alert()"  id="appx_left">
<img src="images/books.svg">
        <p>Donate Books</p>
 </div>
 
<div  class="appx_expo"" onclick="sweet_alert()" >
<img src="images/project.svg">
         <p>Sell Project</p>
  </div>
  
  <div  class="appx_expo" onclick="sweet_alert()" >
  <img src="images/infographic.svg">
      <p>College Ranking</p>
      </div>
    
<div  class="appx_expo" onclick="sweet_alert()" >
<img src="images/reunion.svg">
            <p>Placements Data</p>
  </div>
  <div  class="appx_expo" onclick="sweet_alert()" id="appx_right">
  <img src="images/growth.svg">
          <p>Success Stories</p>
    </div>
</div>
</div>
<!--==================  Mobile version of updates  =================-->
<div class="respo_not" >
<div class="respo_head"><p>Updates</p></div>
<div id="respo_csp" onmouseover="stop_It()"  onmouseout="start_It()">
<div class="respo_cont" style="margin-top:9px;">
  NITs (National Institute Of Technologies) are 
    the mo <span class="blinker">New</span>
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="respo_cont">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
</div>
</div>
<script>
  var inter_val;
function start_Ticker()
{
$(' #respo_csp div:first').slideUp(function(){
  $(this).appendTo($('#respo_csp')).slideDown();
});
}
interval = setInterval(start_Ticker, 3000);
function stop_Ticker()
{
clearInterval(inter_val);
}
function stop_It()
{
stop_Ticker(inter_val);
}
function start_It()
{
  inter_val = setInterval(start_Ticker, 3000);
}
  </script>
 <!--===================== Update Section ===================--> 
 
<div class="upg" data-aos="fade-up" data-aos-duration="800">
<div class="upx">
<div class="headingc"><p>Updates</p></div>
<div id="csp" onmouseover="stopIt()"  onmouseout="startIt()">
<div class="contentx">
  NITs (National Institute Of Technologies) are 
    the mo <span class="blinker" style="display:none;">New</span>
</div>
<div class="contentx">
Lorem Ipsum is simply dummy text of the
 printing and typesetting industry
</div>
<div class="contentx">
Lorem Ipsum is simply dummy text of the
 printing and typesetting industry 
</div>

<div class="contentx">
Lorem Ipsum is simply dummy text of the
 printing and typesetting industry
</div>
<div class="contentx">
  NITs (National Institute Of Technologies) are 
    the mo 
</div>
<div class="contentx">
  NITs (National Institute Of Technologies) are 
    the most..
</div>

</div>
</div>
<!--==================  Sliding images  =================-->
<div class="mySlide">
<div class="slidex">
 <img class="slide" src="images/darkback.jpg">
 <div id="caption">
   <img src="images/techvaganza.png">
   <p style="margin-bottom:5px;">Techvaganza 2020</p>
    <p style="margin-left:27px;"> NIT Srinagar</p>
  </div>
 </div>
 <div class="slidex">
 <div id="captionx"><p>Cultural Night</p></div>
 <img class="slide" src="images/cultural.jpg">
 </div>
<div class="slidex">
<div id="captionx"><p>Musical Night</p></div>
 <img class="slide" src="images/musical.jpg">
 </div>
 <div class="slidex">
<div id="captionx"><p>Dance Night</p></div>
 <img class="slide" src="images/dancex.jpg">
 </div>
 <div class="slidex">
<div id="captionx"><p>Robotics</p></div>
 <img class="slide" src="images/robotics.jpeg">
 </div>
 <div class="slidex">
<div id="captionx"><p>Coding</p></div>
 <img class="slide" src="images/coding.jpg">
 </div>
</div>
</div>
<!--==================  Stop & start sliding updates  =================-->
<script>
  var interval;
function startTicker()
{
$('.upx #csp div:first').slideUp(function(){
  $(this).appendTo($('#csp')).slideDown();
});
}
interval = setInterval(startTicker, 3000);
function stopTicker()
{
clearInterval(interval);
}
function stopIt()
{
stopTicker(interval);
}
function startIt()
{
  interval = setInterval(startTicker, 3000);
}
  </script>

<!--================ About Section ====================-->
<a id="about"></a>
    <div style="width:100%;height:5%;margin-top:4%;" ></div>
    <p class="about-head">About Us</p>
    <div class="about-ln"></div> 
    <div class="about">
     <div class="about-img" id="about-img" data-aos="fade-right" data-aos-offset="200"  data-aos-easing="ease-in-sine" data-aos-duration="600">
         <img src="images\us3.png" height="300px" width="100%">
     </div>
    <div class="about-text" data-aos="fade-left" data-aos-offset="200"  data-aos-easing="ease-in-sine" data-aos-duration="600"> 
    <p style="text-align:justify;" >
    NITs (National Institute Of Technologies) are 
    the most prestigious Engineering Institutions 
    of India after IITs. There are 31 NITs across the various states of India. 
   I AM AN NITIAN was a facebook page created in
    July 2016 with an aim to connect all Nitians.  <span id="ab"> Today It has 30K+ followers on fb & 3K+ followers on Instagram. Now it is not 
    limited to only a facebook page.
    But it has become the biggest student community.</span>
    Here you can check out the news & events related to each and every NIT.</p>
    </div>
    </div>


<!--================ News Section ====================-->
<div style="width:100%;height:1%;background:transparent;margin-top:4%;"></div>
<div class="explore exp" style="margin-top:0;">
  <p class="main-expo"  data-aos="fade-up" data-aos-duration="800">News <span id="ns-art">& Articles</span></p>
 
  <div id="expo-line"  class="expo-line" style="width:15rem;position:relative;margin-bottom:3rem;"
  data-aos="fade-up" data-aos-duration="800" ></div>
  <div class="about-ln" style="width:15%;margin:0  0 1rem  0;" data-aos="fade-up" data-aos-duration="800"></div>
 <?php 
            $query = "select * from tbl_images order by id desc limit 8";
             $result = mysqli_query ($conn, $query);
                if (mysqli_num_rows($result)>0) 
                {
                    $i=0;
                    while ($row = mysqli_fetch_assoc($result))
                     {
                       $id = $row["id"];
                      if ($i++ % 4 == 0) 
                      {
                      
                        echo "<div class='expo' data-aos='fade-up' data-aos-duration='800'>";
                      }
          
                ?>        
          
              <div class="xnnn" style="box-shadow:none;">
              <?php  echo '<a href="news.php?id='.$id.'">'; ?>
                <?php echo '<div class="zoom"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>'?>
              <?php 
              $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
              $text = implode(' ',array_slice(explode(' ', $row['text']),0,15)); //getting fires 19 words from text
              echo '<p style="margin-top:2px;>'.'<span class="heading">'.$head.'</span>'." ".$text.'..</p>';
                  ?>   
                  </a>                                            
                </div>   
          
          <?php
                      if ($i % 4 == 0) echo "</div>";
              ?>
          
           <?php
                  }
                  $_SESSION['x']=$ids;
                  if ($i % 4 != 0) echo "</div>";
                 }
               else 
               {
              ?>
              <div>No results found.</div>
              <?php   
              }
             ?>
               <div class="more_btn" data-aos="fade-up" data-aos-duration="800"> <button type="button" onclick="location.href='more-news.php'">
               More News &nbsp;<i class="fas fa-chevron-circle-right"></i></button></div>
    </div>

<!--============== Side Feedback Button ==================-->
<div id="mySidenav" class="sidenav">
<a  id="feedback" style=" padding:15px 28px 0 25px;" onclick="fun1()"><span>FEEDBACK</span></a>
</div>
<!--============== Signup Popup ==================-->
<div class="signup" id="sign">
<div class="sign-card">
 <div class="sign-img">
  <div class="links">
    <p class="p1">Quick Links</p>
    <div class="msgx" ><p id="msgx" ></p></div>
    <ul>
     <a href="#"> <li>Colleges</li></a>
     <a href="#"> <li>Exams</li></a>
     <a href="#"> <li>Cutoff</li></a>
     <a href="#"> <li>News</li></a>
     <a href="#"> <li>Events</li></a>
     <a href="#"> <li>Important Dates</li></a>
      </ul>
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
      <option>National Institute Of technology Srinagar</option> 
      <option>National Institute Of technology Srinagar Silchar</option>
      <option>National Institute Of technology Srinagar Trichy</option>
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
<!--============== Feedback Popup ==================-->
<div class="popup">

    <div class="popup-content">
    <img src="images\cut.png" alt="close" width="21px" height="21px" onclick="fun2()" class="close">
    <p>Give Us Your Feedback</p>
    <div class="feed_msg"> <p id="feed_msg"></p></div>
    <form method="post" autocomplete="off" enctype="multipart/fomr-data" id="feedback_form">
    <input type="text" placeholder="Your name" id="user_name_pop">
    <input type="text" placeholder="Your email" id="user_email_pop">
    <textarea rows="4" class="textarr textaxx" placeholder="Write your message here...." id="user_feedback_pop"></textarea>
    <button type="button" value="Send" class="btn-send"  id="user_btn_pop" >Send</button>
    </form>
  </div>
   </div>


  <!--============== Nits Logo =====================-->
   <div class="nit-logos" data-aos="fade-up" data-aos-duration="800">
    <div class="owl-carousel owl-theme">
    <div class="item"><img src="images\nit-logo\nit trichy.png"><p>nit trichy</p></div>
    <div class="item"><img src="images\nit-logo\nit rourkela.png"><p>nit rourkela</p></div>
    <div class="item"><img src="images\nit-logo\nit kurukshetra.png"><p>nit Kurukshetra</p></div>
    <div class="item"><img src="images\nit-logo\nit allahabad.png"><p>mnnit Allahabad</p></div>
    <div class="item"><img src="images\nit-logo\nit durgapur.png"><p>nit Durgapur</p></div>
    <div class="item"><img src="images\nit-logo\nit silchar.png"><p>nit silchar</p></div>
    <div class="item"><img src="images\nit-logo\nit jaipur.png"><p>mnit Jaipur</p></div>
    <div class="item"><img src="images\nit-logo\nit warangal.png"><p>nit Warangal</p></div>
    <div class="item"><img src="images\nit-logo\nit calicut.png"><p>nit Calicut</p></div>
    <div class="item"><img src="images\nit-logo\nit nagpur.png"><p>vnit Nagpur</p></div>
    <div class="item"><img src="images\nit-logo\nit surat.png"><p>svnit Surat</p></div>
    <div class="item"><img src="images\nit-logo\nit suratkal.png"><p>nit Surathkal</p></div>
    <div class="item"><img src="images\nit-logo\nit hamirpur.png"><p>nit Hamirpur</p></div>
    <div class="item"><img src="images\nit-logo\nit bhopal.png"><p>manit Bhopal</p></div>
    <div class="item"><img src="images\nit-logo\nit meghalay.png"><p>nit Meghalaya</p></div>
    <div class="item"><img src="images\nit-logo\nit agartala.png"><p>nit Agartala</p></div>
    <div class="item"><img src="images\nit-logo\nit raipur.png"><p>nit Raipur</p></div>
    <div class="item"><img src="images\nit-logo\nit goa.png"><p>nit Goa</p></div>
    <div class="item"><img src="images\nit-logo\nit jalandhar.png"><p>nit jalandhar</p></div>
    <div class="item"><img src="images\nit-logo\nit jamshedpur.png"><p>nit Jamshedpur</p></div>
    <div class="item"><img src="images\nit-logo\nit patna.png"><p>nit Patna</p></div>
    <div class="item"><img src="images\nit-logo\nit manipur.png"><p>nit Manipur</p></div>
    <div class="item"><img src="images\nit-logo\nitlogo.png"><p>nit Srinagar</p></div>
    <div class="item"><img src="images\nit-logo\nit delhi.png"><p>nit Delhi</p></div>
    <div class="item"><img src="images\nit-logo\nit nagaland.png"><p>nit Nagaland</p></div>
    <div class="item"><img src="images\nit-logo\nit pudu.png"><p>nit Puducherry</p></div>
    <div class="item"><img src="images\nit-logo\nit andhra.png"><p>nit Andhra Pradesh</p></div>
    <div class="item"><img src="images\nit-logo\nit sikkim.png"><p>nit Sikkim</p></div>
    <div class="item"><img src="images\nit-logo\nit uttrakhand.png"><p>nit Uttarakhand</p></div>
    <div class="item"><img src="images\nit-logo\nit mizoram.png"><p>nit Mizoram</p></div>
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
          </div>
      <div><p class="y">Cutoff</p>
        <div class="linex" id="lz"></div>
        <p><a href="#">IITs </a></p>
        <p><a href="#">NITs</a></p>
        <p><a href="#">IIITs</a></p>
        <p><a href="#">AIIMS</a></p></div>
      <div><p class="y">Links</p>
        <div class="linex" id="la"></div>
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
<!--===================  TypedJs CDN  =======================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js" type="text/javascript"></script>
<!--================  Owl Carousel Libraray  ==============-->
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<!--==================  aos.js  CDN  ==================-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--==================  Local Js Files  ==================-->
<script src="js/index.js" type="text/javascript"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>
<!--===================   Get total Number of notifications   ====================-->
<script   type="text/javascript" src="js/notification.js"></script>
<script>
  AOS.init({ disable: 'mobile' }); //disabling the animations in mobile version
</script>
<script>
function sweet_alert()
{
  Swal.fire({
  title: 'Will be \nupdated soon !',
  animation: false,
  customClass: {
    popup: 'animated tada'
  }
}); 
}
  </script>
<script>
var myIndex = 0;
carousel();
function carousel() {
  
    var i;
    var x = document.getElementsByClassName("slidex");
    
    for (i = 0; i < x.length ; i++) 
    {
       x[i].style.display = "none"; 
      showCaption();
      
    }
    myIndex++;
   
    if (myIndex > x.length) {
       myIndex = 1;
        }  
        else
        {
          hideCaption();
        }
      
    x[myIndex-1].style.display = "block"; 
    setTimeout(carousel,3000);
      }
      
  function showCaption()
  {
    TweenMax.to('#caption',0.5,{scaleX: 1});
  }
  function hideCaption()
  {
    TweenMax.to('#caption',0.5,{scaleX: 0});
  }
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
      if($(window).scrollTop()!= 0)
    {
      $('header').css('background', 'black');
    }
    },200)

  })

  $(window).scroll(function(){
  $('header').css('background', 'black');
  if($(window).scrollTop() == 0)
    {
      $('header').css('background', 'transparent');
    }
})
  


  $('.menu-toggle').click(function(){
    $(this).css('display','none');
    $('.cut_nav').css('display','block');

    $('nav').css('z-index', '4');

    $('header').css('background', 'transparent');
    $('.cut_nav').css('background','black');
    TweenMax.to('.active',0.4,{scaleX: 1});

    setTimeout(function(){
      $('.logo').css('marginLeft', '62px');
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
  $('.logo_txt').css('marginTop', '0px');
})

$('#register_nav').click(function(){
  $('.logo').css('marginLeft', '0px');
  $('.logo').css('marginTop', '0px');
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
  $('.logo_txt').css('marginTop', '0px');
})

$('#about_nav').click(function()
{
  $('.logo').css('marginLeft', '0px');
  $('.logo').css('marginTop', '0px');
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
  $('.logo_txt').css('marginTop', '0px');
})

}

})

/*========================  Feedback Form Submission  =====================*/

  $('#user_btn_pop').click(function()
{
  var user_name = $('#user_name_pop').val().trim();
  var user_email = $('#user_email_pop').val().trim();
  var user_feedback = $('#user_feedback_pop').val().trim();
 

if(user_name != '' && user_email != '' && user_feedback != '')
{

$.ajax({

url:'feedback.php',
type:'post',
data: {user_name : user_name, user_email : user_email, user_feedback : user_feedback},
success: function(data)
{
if(data == 1)
{
  $("#feedback_form").trigger("reset");
  funfeed();
  $('.feed_msg').css('display', 'none');
  $('.popup-content p').css('marginBottom', '20px')
}
else if(data == -1)
{
  $('#feed_msg').text('Use only letters in name fieled');
}
else if(data == -2)
{
  $('#feed_msg').text('Please use a valid email address');
}
else
{
  $('#feed_msg').text('Unable to send feedback\n Try again');
}

}

});

}
else
{
  $('#feed_msg').text('Please fill all the fields');
}

function funfeed()
{

setTimeout(function(){
fun2();
},2000);  //hide feedback box after 2 seconds


Swal.fire({
				  position: 'center',
				  type: 'success',
				  title: 'Thank you for your feedback',
				  showConfirmButton: false,
				  timer:1600
			}); 
      $(".swal2-modal").css({width: '24rem'});
      $(".swal2-modal").css('background-color', 'rgba(253,253,253,1)');
}

});

</script>
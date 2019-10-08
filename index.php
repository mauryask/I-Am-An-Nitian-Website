<?php
include_once('connection.php');
session_start(); 
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4582330600142028",
    enable_page_level_ads: true
  });
</script>
<title>I Am An Nitian | Home</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta name="viewport" content= "width=device-width, user-scalable=no">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link rel="icon" href="images/imnitian.png">
<link href="css/ask.css" rel="stylesheet"  type="text/css">
<link href="css/explore.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet"  type="text/css">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/popup.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<style>@import url('https://fonts.googleapis.com/css?family=Playfair+Display&display=swap');</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="css/num_counter.css" type="text/css" rel="stylesheet">

</head>

<body onload="loadme()">
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
<div id="loader">    
</div>
<div class="wrapper">
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   

<header id="f">
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
<li><a href="index.php" class="home" >Home</a></li>

<li><a href="more-news.php" class="homex" >News</a></li>
<li ><a href="#updf" class="homex" id="update_nav">Updates</a></li>

<li><a href="#about" class="homex" id="about_nav">About Us</a></li>

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

<div class="banner"> 
  <div class="overlay"></div>

<div class="textx">
<p class="dynamic-text" data-aos='fade-up' data-aos-duration="600">I AM AN <span id="dyno"><br/></span><span class="text"></span><p>
<p class="msg" data-aos='fade-up' data-aos-duration="600" data-aos-delay="500">Join The Biggest Student Community</p>

<button class="join" onclick="show_signup()" data-aos='fade-up' data-aos-duration="600" data-aos-delay="600"> Join Now</button>

<div class="social">
    <a  target="_blank" href="https://www.facebook.com/iamannitian" alt="facebook"><img  class="svg" src="images/facebook.svg"  ></a>
    <a href="https://www.instagram.com/i_am_an_nitian/" target="_blank"  alt="instagram"><img  class="svg" src="images/instagram.svg" ></a>
    <a href="https://www.youtube.com/iamannitian" target="_blank"><img  class="svg" src="images/ytb.jpg" alt="twitter"></a>
    
</div>
</div>
<div class="center">
<div class="down">
</div> 
</div>
</div>

<!--= Explore Section =-->
<div class="explore" >
  <p class="main-expo" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'>Explore</p>
  <div class="expo-line" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'></div>

  <div class="expo exc" style="margin-top:2rem;">
  <div class="appx" onclick="location.href='story.php'" data-aos-once="true" data-aos="flip-right" data-aos-duration="800" data-aos-delay="400">
          <img src="images/growth.svg">
          <p>Success Stories</p>
         </div>
    <div class="appx" onclick="location.href='ranking-19.php'" data-aos-once="true" data-aos="flip-right" data-aos-duration="800" data-aos-delay="700">
      <img src="images/infographic.svg">
      <p>Ranking</p>
     </div>
      
         <div class="appx" onclick="location.href='placement.php'" data-aos-once="true" data-aos="flip-right" data-aos-duration="800" data-aos-delay="550">
            <img src="images/reunion.svg">
            <p>Placements </p>
           </div>

  <div class="appx" onclick="location.href='uPDxgdf.php'" data-aos-once="true" data-aos="flip-right" data-aos-duration="800" data-aos-delay="1000">
        <img src="images/team.svg">
        <p>CA Portal</p>
       </div>
       <div class="appx" onclick="location.href='uPDxgdf.php'" id="respo" data-aos-once="true" data-aos="flip-right" data-aos-duration="800" data-aos-delay="850">
         <img src="images/question.svg">
         <p>Ask Question</p>
        </div>
    
     </div>
  <!--= Mobile version horizontal tabs =-->
<div class="mob-expo" style="margin-top:3rem;">

<div  class="appx_expo" onclick="location.href='story.php'" id="appx_right">
  <img src="images/growth.svg">
          <p>Success Stories</p>
    </div>


<div  class="appx_expo" onclick="location.href='ranking-19.php'" >
  <img src="images/infographic.svg">
      <p>Ranking</p>
      </div>
    
<div  class="appx_expo" onclick="location.href='placement.php'" >
<img src="images/reunion.svg">
            <p>Placements </p>
  </div>


  <div class="appx_expo" onclick="location.href='uPDxgdf.php'" >
        <img src="images/team.svg">
        <p>CA Portal</p>
       </div>


<div  class="appx_expo" onclick="location.href='uPDxgdf.php'" id="appx_left">
<img src="images/question.svg">
         <p>Ask Question</p>
  </div>

   
</div>
</div>
<!--= Mobile version of updates =-->
<a id="updf"></a>
    <div class="mob_break"></div>
<div class="respo_not">
<div class="respo_head"><p>Updates</p></div>
<div id="respo_csp" onmouseover="stop_It()"  onmouseout="start_It()">
<div class="respo_cont" onclick="location.href='gate_topper_list.php'" style="margin-top:9px;">
 List of nitians who cracked GATE - 2019 <span class="blinker" style="display:none;">New</span>
</div>
<div class="respo_cont" onclick="location.href='ese_topper_list.php'">
List of nitians who cracked ESE- 2019
</div>
<div class="respo_cont" onclick="location.href='placement.php'">
Check out the B.Tech. placements of various NITs
</div>

<div class="respo_cont" onclick="location.href='placement2.php'">
Check out the M.Tech. placements of various NITs
</div>
<div class="respo_cont" onclick="location.href='rank-placement-wise.php'">
 Check out the ranking of NITs based on placements 
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
 <!--= Update Section =--> 
 <a id="updf"></a>
    <div style="width:100%;height:5%;margin-top:4%;" ></div>
<div class="upg" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'>
<div class="upx">
<div class="headingc"><p>Updates</p></div>
<div id="csp" onmouseover="stopIt()"  onmouseout="startIt()">
<div class="contentx" onclick="location.href='gate_topper_list.php'">
 Click here to see the list of nitians who did splendid performence in
  GATE - 2019 <span class="blinker" style="display:none;">New</span>
</div>
<div class="contentx" onclick="location.href='ese_topper_list.php'">
List of nitians who cracked ESE- 2019
</div>
<div class="contentx" onclick="location.href='placement.php'">
Check out the B.Tech. placements of various NITs <span class="blinker" style="display:none;">New</span>
</div>

<div class="contentx" onclick="location.href='placement2.php'">
Check out the M.Tech. placements of various NITs
</div>
<div class="contentx" onclick="location.href='rank-placement-wise.php'">
 Check out the ranking of NITs based on placements 
</div>

</div>
</div>
<!--= Sliding images =-->
<div class="mySlide">
<div class="slidex">
 <img class="slide" src="images/Jamshedpur.jpg">
 <div id="caption">
   <img src="images/imnitian.png">
   <p style="">I AM AN NITIAN</p>
    <p style="margin-left:40px;">Presents</p>
  </div>
 </div>

 <div class="slidex">
<div id="captionx"><p>NIT Jamshedpur</p></div>
 <img class="slide" src="images/Jamshedpur.jpg">
 </div>

 <div class="slidex">
 <div id="captionx"><p>NIT Agartala</p></div>
 <img class="slide" src="images/Agartala.jpg">
 </div>

 <div class="slidex">
<div id="captionx"><p>NIT Meghalaya</p></div>
 <img class="slide" src="images/Meghalaya.jpg">
 </div>
 <div class="slidex">
<div id="captionx"><p>NIT Surathkal</p></div>
 <img class="slide" src="images/Surathkal.jpg">
 </div>
 <div class="slidex">
<div id="captionx"><p>VNIT Nagpur</p></div>
 <img class="slide" src="images/Nagpur.jpg">
 </div>

 <div class="slidex">
 <div id="captionx"><p>MANIT Bhopal</p></div>
 <img class="slide" src="images/Bhopal.jpg">
 </div>

 <div class="slidex">
 <div id="captionx"><p>NIT Calicut</p></div>
 <img class="slide" src="images/Calicut.jpg">
 </div>

 <div class="slidex">
 <div id="captionx"><p>NIT Raipur</p></div>
 <img class="slide" src="images/Raipur.jpg">
 </div>

</div>
</div>
<!--= Stop & start sliding updates =-->
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

<a id="about"></a>
    <div style="width:100%;height:5%;margin-top:4%;background:red;" ></div>
    <p class="about-head">About Us</p>
    <div class="about-ln"></div> 
    <div class="about">
     <div class="about-img" id="about-img" data-aos="fade-right" data-aos-once='true' data-aos-offset="200"  data-aos-easing="ease-in-sine" data-aos-duration="600">
         <img src="images\us3.png" height="300px" width="100%">
     </div>
    <div class="about-text" data-aos="fade-left" data-aos-offset="200" data-aos-once='true'  data-aos-easing="ease-in-sine" data-aos-duration="600"> 
    <p style="text-align:justify;" >
    NITs (National Institute Of Technologies) are 
    the most prestigious Engineering Institutions 
    of India after IITs. There are 31 NITs across the various parts of India. 
   I AM AN NITIAN is a Facebook page which was created in
    July 2016 to connect with the Nitians. Now it is not 
    limited to only a Facebook page 
    but has become the biggest student community and a huge source of news and updates related to Engineering.
    Here you can get regular updates of all the NITs.
    </p>
    </div>
    </div>


<!--= News Section =-->
<div class="explore exp" style="margin-top:0;">
  <p class="main-expo"  data-aos="fade-up" data-aos-duration="600" data-aos-once='true'>News <span id="ns-art">& Articles</span></p>
  <div id="expo-line"  class="expo-line" style="width:15rem;position:relative;margin-bottom:1rem;"
  data-aos="fade-up" data-aos-duration="600" data-aos-once='true'></div>
  <div class="about-ln" style="width:12%;"  data-aos="fade-up" data-aos-duration="600"></div>
 <?php 
            $query = "select * from tbl_images order by id desc limit 4";
             $result = mysqli_query ($conn, $query);
                if (mysqli_num_rows($result)>0) 
                {
                    $i=0;
                    while ($row = mysqli_fetch_assoc($result))
                     {
                       $id = $row["id"];
                      if ($i++ % 4 == 0) 
                      {
                      
                        echo "<div class='expo' data-aos='fade-up' data-aos-duration='800' data-aos-once='true'>";
                      }
          
                ?>        
          
              <div class="xnnn" style="box-shadow:0 1px 3px rgba(0,0,0,0.3);">
              <?php  echo '<a href="news.php?id='.$id.'">'; ?>
                <?php echo '<div class="zoom"><img alt="news" src="'.$row['file_path'].'"/></div>'?>
              <?php 
              $head = implode(' ',array_slice(explode(' ', $row['heading']),0,11)); 
              //$text = implode(' ',array_slice(explode(' ', $row['text']),0,5)); 
              echo '<p style="margin-top:2px;">'.'<span class="heading">'.$head.'</span></p>';
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
              <div style="text-align:center;margin:0 auto;">No results found</div>
              <?php   
              }
             ?>
               <div class="more_btn" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'> <button type="button" onclick="location.href='more-news.php'">
               More News &nbsp;<i class="fas fa-chevron-circle-right"></i></button></div>
    </div>
<!--= Side Feedback Button =-->
<div id="mySidenav" class="sidenav">
<a  id="feedback" style=" padding:15px 28px 0 25px;" onclick="fun1()"><span>FEEDBACK</span></a>
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

    <p class="p2"><a target="_blank" href="https://www.freeprivacypolicy.com/privacy/view/b169e80c9ca0308e3025c2bad81475b9">privacy policy</a></p>
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
<div class="forget_div"><a href="forgot_password.php" class="forget">forgot password?</a></div>
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

<!--= Feedback Popup =-->
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


<div class="counter">
<div class="counter-1">
<div class="counter_img"><img src="images/boy.svg"></div>
<div class="counter_title"><span>Users</span></div>
<div class="countx"><span class='numscroller' data-min='1' data-max='6000' data-delay='6' data-increment='30'>10</span><span>+</span></div>
</div>

<div class="counter-2">
<div class="counter_img"><img src="images/fbs.svg"></div>
<div class="counter_title"><span>Followers</span></div>
<div class="countx"><span class='numscroller' data-min='1' data-max='6000' data-delay='6' data-increment='30'>10</span><span>+</span></div>
</div>

<div class="counter-3">
<div class="counter_img"><img src="images/ins.svg"></div>
<div class="counter_title"><span>Followers</span></div>
<div class="countx"><span class='numscroller' data-min='1' data-max='6000' data-delay='6' data-increment='30'>10</span><span>+</span></div>
</div>

</div>


  <!--= Nits Logo =-->
   <div class="nit-logos" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'>
    <div class="owl-carousel owl-theme">
    <div class="item"><img src="images\nit-logo\nit trichy.png"><p>nit trichy</p></div>
    <div class="item"><img src="images\nit-logo\nit rourkela.png"><p>nit rourkela</p></div>
    <div class="item"><img src="images\nit-logo\nit kurukshetra.png"><p>nit Kurukshetra</p></div>
    <div class="item"><img src="images\nit-logo\nit allahabad.png"><p>mnnit Allahabad</p></div>
    <div class="item"><img src="images\nit-logo\nit durgapur.png"><p>nit Durgapur</p></div>
    <div class="item"><img src="images\nit-logo\nit silchar.png"><p>nit silchar</p></div>
    <div class="item"><img src="images\nit-logo\nit jaipur.png"><p>mnit Jaipur</p></div>
    <div class="item"  ><img src="images\nit-logo\nit warangal.png"><p>nit Warangal</p></div>
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
    <div class="item"><img src="images\nit-logo\nit sikkim.svg"><p>nit Sikkim</p></div>
    <div class="item"><img src="images\nit-logo\nit uttrakhand.png"><p>nit Uttrakhand</p></div>
    <div class="item"><img src="images\nit-logo\nit mizoram.png"><p>nit Mizoram</p></div>
	<div class="item"><img src="images\nit-logo\nit arunachal.png"><p>nit Arunachal Pradesh</p></div>
    </div>
    </div>

  <footer>

  <div class="datad">
  <p class="x">Feel Free To Contact Us</p>
  <p id="cont">iamannitian@gmail.com &nbsp &nbsp| &nbsp +91-6202590504 &nbsp | &nbsp  +91-8130512823</p>
 <span id="respo_contact">
 <P>iamannitian@gmail.com</p> 
 <P>+91-6202590504</p> 
 <P>+91-8130512823</p> 
   </span>
</div>
<div class="container">
<p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developerx">&nbsp | &nbspAll Rights Reserved &nbsp | &nbsp</span><span id="developerx" class="hov" 
onclick="location.href='https://www.freeprivacypolicy.com/privacy/view/b169e80c9ca0308e3025c2bad81475b9'">Privacy Policy</span></p>
<p id="and_copy" class="copyright hov" onclick="location.href='https://www.freeprivacypolicy.com/privacy/view/b169e80c9ca0308e3025c2bad81475b9'">privacy policy</p>

<p class="copyright" id="developer">Developed by | Shubham Maurya | NIT SXR
<span id="github">| <a  id="hover" href="https://github.com/pnstech" target="_blank" >Github</a></span>
 <span id="github">| <a  href="https://www.linkedin.com/in/cyberthreatatnit" target="_blank" >Linkedin</a></span>
 </p>

</div>
</footer>
</div>
</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="js/num-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/index.js" type="text/javascript"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>
<script>
  AOS.init({ disable: 'mobile' }); 
</script>
<script>              

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

 /*= Menu toggle =*/
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
  $('.cut_nav').css('background','black');
  TweenMax.to('.active',0.4,{scaleX: 1});
})

$('#login_nav,#register_nav,#about_nav,#update_nav').click(function()
{
TweenMax.to('.active',0.1,{scaleX: 0});  
$('.cut_nav').css('display','none');
$('.menu-toggle').css('display','block');
})

}
})

/* Feedback Form Submission */
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
  $('#feed_msg').text('please fill out the credentials');
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
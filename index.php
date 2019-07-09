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
<title>I Am An Nitian | Home</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
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
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top"><i class="fas fa-angle-double-up"></i></button>

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
<li><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;">I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="home" >Home</a></li>
<li><a href="team.html" class="homex">Our team</a></li>
<li><a href="more-news.php" class="homex">News</a></li>
<li><a href="#about" class="homex">About Us</a></li>
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
<button onclick="search()" style="text-transform: uppercase;letter-spacing: 0.8px; font-weight: bold;">Search <i class="fas fa-search"></i></button>
</li>
<li><a class="homex" style="cursor:pointer; width:150px;text-align:center;margin-left:-1rem;">
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
    echo '<li><a href="edit.php" class="homex" >Admin</a></li>';
  }
}
?>

<?php if( isset($_SESSION['name']) && !empty($_SESSION['name']))
{
?>
<li><a style="cursor:pointer;"  href="logout.php" >Logout</a></li>
<?php }else{ ?>
<li><a style="cursor:pointer;"  onclick="show_log()">Login</a></li>
<?php } ?>

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

<!--================ Main Banner ====================-->
<div class="banner"> 
<div class="textx">
<p class="dynamic-text">I AM AN <span class="text"></span><p>
<p class="msg">Join The Biggest Student Community</p>

<button class="join" onclick="show_signup()"> Join Now</button>

<div class="social">
    <a  target="_blank" href="https://www.facebook.com/iamannitian" alt="facebook"><img  class="svg" src="images/facebook.svg"  ></a>
    <a href="https://www.instagram.com/i_am_an_nitian/" target="_blank"  alt="instagram"><img  class="svg" src="images/instagram.svg" ></a>
    <a href="#"><img  class="svg" src="images/twitter.svg" alt="twitter"></a>
    <a href="#"><img  class="svg" src="images/linkedin.svg"linkedin"></a>
</div>
</div>
<div class="center">
<div class="down">
</div>
</div>
</div>
<!--================ Explore Section ====================-->
<div class="explore" >
  <p class="main-expo">Explore</p>
  <div class="expo-line"></div>
  <div class="expo" style="margin-top:3rem;" >
   <div class="appx">
     <img src="images/school.svg">
     <p>Colleges</p>
    </div>
    
   <div class="appx">
      <img src="images/exam.svg">
      <p>Exams</p>
     </div>
     
   <div class="appx" onclick="location.href='ranking.php'">
      <img src="images/infographic.svg">
      <p>College Ranking</p>
     </div>
     
   <div class="appx">
      <img src="images/research.svg">
      <p>Cutoff</p>
     </div>
   
     <div class="appx">
        <img src="images/review.svg">
        <p>College Reviews</p>
       </div>
  </div>
  <div class="expo">
      <div class="appx" onclick="location.href='story.php'">
          <img src="images/growth.svg">
          <p>Success Stories</p>
         </div>
    
         
       <div class="appx">
          <img src="images/stage.svg">
          <p>College Fests</p>
         </div>
       
         <div class="appx">
            <img src="images/dj.svg">
            <p>Clubs</p>
           </div>
      <div class="appx" onclick="location.href='donate.php'">
        <img src="images/books.svg">
        <p>Donate Books</p>
       </div>
   
       
      <div class="appx" onclick="location.href='project.php'">
         <img src="images/project.svg">
         <p>Sell Project</p>
        </div>
   
     </div>
</div>
<!--================ Ask Section ====================-->
<div class="ask">
  <div class="txtr">
    <div>
      <form name="ask" action="">
        <input type="text" placeholder="Topic" class="inpx">
        <textarea placeholder="Write Your Question Here..." rows="5" value=""></textarea>
      </form>
    </div>
 <div>
   <button>Ask</button>
 </div>
  </div>
  <div class="imgx">
      <p><span>Conversation With NItians</span><br>
        We are here to assist you<br>
      <span class="xspan">Ask Any question Related to your acadamics</span></p>
    <div class="overlay"></div>
  </div>
  </div>
  
 
<!--================ News Section ====================-->
<div style="width:100%;height:1%;background:transparent;margin-top:4%;"></div>
<div class="explore" style="margin-top:0;">
  <p class="main-expo">News & Articles</p>
  <div class="expo-line" style="width:18rem;position:relative;margin-bottom:3rem;"></div>
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
                      
                        echo "<div class='expo'>";
                      }
          
                ?>        
          
              <div class="xnnn" style="box-shadow:none;">
                <?php echo '<div class="zoom"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>'?>
              <?php 
              $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
              $text = implode(' ',array_slice(explode(' ', $row['text']),0,15)); //getting fires 19 words from text
              echo '<p>'.'<span class="heading">'.$head.'</span>'." ".$text.'..<a href="news.php?id='.$id.'">'." Read More".'<i class="fas fa-chevron-circle-right"></i>'.'</a>'.'</p>';
                  ?>                                               
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
                  
     <a href="more-news.php" class="more">More News  <i class="fas fa-chevron-circle-right"></i></a>
    </div>
<!--================ About Section ====================-->
    <a id="about"></a>
    <div style="width:100%;height:5%;margin-top:2%;"></div>
    <div class="about">
     <div class="about-img">
         <img src="images\us3.png" height="300px" width="100%" style="border-radius: 5px  0  0 5px;">
     </div>
    <div class="about-text"> 
    <p style="text-align:justify;" >
    NITs (National Institute Of Technologies) are 
    the most prestigious Engineering Institutions 
    of India after IITs. There are 31 NITs across the various states of India. 
    I AM AN NITIAN was a facebook page created in
    July 2016 with an aim to connect all Nitians. Today It has 30K+ followers on fb & 3K+ followers on Instagram. Now it is not 
    limited to only a facebook page.
    But it has become the biggest student community.
    Here you can check out the news & events related to each and every NIT.</p>
    </div>
    </div>
<!--============== Side Buttons ==================-->
<div id="mySidenav" class="sidenav">
<a  id="feedback" style=" padding:15px 28px 0 25px;" onclick="fun1()"><span>FEEDBACK</span></a>
</div>
<div id="mySidenavx" class="sidenavx">
  <a  id="update" style=" padding:16px 28px 0 25px;" onclick="fun3()"><span>UPDATES</span></a>
  </div>
<!--============== Signup Popup ==================-->
<div class="signup" id="sign">
<div class="sign-card">
 <div class="sign-img">
  <div class="links">
    <p class="p1">Quick Links</p>
    <div class="msgx"><p id="msgx"></p></div>
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
   <div>
     <form method="post" autocomplete="off">
   <input  type="text"  name="name"  id="name" placeholder="Name"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
   <input  type="text" name="user_email" id="user_email"  placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
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
      <select name="state" id="state" autocomplete="off" onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <option>Select Your State</option>
          <option>Uttar Pradesh</option>
          <option>Jammu and Kashmir</option>
          <option>Rajsthan</option>
          <option>Tamilnadu</option>
          <option>Uttrakhand</option>
          <option>Bihar</option>
          </select>
          <input name="user_pass" id="user_pass" type="password" placeholder="Password" autocomplete="off" onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <input type="password"  id="cnf_pass" name="cnf_pass" placeholder="Confirm Password" autocomplete="off" onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
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
  <input name="text" autocomplete="pnstech" id="email" type="text" placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
  <input  name="pass" autocomplete="pnstech" id="pass" type="password" placeholder="Password"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
<div class="select">
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
    <input type="text" placeholder="Your Name" id="username">
    <input type="email" placeholder="Your Email">
    <textarea rows="4" class="textarr textaxx" placeholder="Write Your Message Here...."></textarea>
    <input type="submit" value="Send" class="btn-send" onclick="funalert()">
  </div>
   </div>
   <div class="popupx">
    <div class="popupx-content">
    <img src="images\cut.png" alt="close" width="21px" height="21px" onclick="fun4()" class="close">
    <p class="uph" style="margin-bottom:3px;">Updates</p>
    <div class="up-line"></div>
    <div class="upd">
    <div class="updx">
       <p>
      Lorem Ipsum is simply dummy text of the 
      printing and typesetting industry. Lorem
       Ipsum has been. <span class="blinker">New</span>
    </p>
  </div>
  
  <div class="updx">
      <p>
          Lorem Ipsum is simply dummy text of the 
          printing and typesetting industry. Lorem
           Ipsum has been. <span class="blinker">New</span>
        </p>
 </div>
 <div class="updx">
    <p>
        Lorem Ipsum is simply dummy text of the 
        printing and typesetting industry. Lorem
         Ipsum has been. <span class="blinker">New</span>
      </p>
</div>
<div class="updx">
    <p>
        Lorem Ipsum is simply dummy text of the 
        printing and typesetting industry. Lorem
         Ipsum has been.
      </p>
</div>
<div class="updx">
    <p>
        Lorem Ipsum is simply dummy text of the 
        printing and typesetting industry. Lorem
         Ipsum has been.
      </p>
</div>
    </div>
    
  </div>
   </div>
   
  <!--============== Nits Logo =====================-->
   <div class="nit-logos">
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
<!--==================  Local Js Files  ==================-->
<script src="js/index.js" type="text/javascript"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
/*============  Check and Uncheck the radio button ===========*/
<script>
  /*
$('input[type=radio]').change(function()
{
    if (this.checked)
    {
        $(this).closest('.select')
            .find('input[type=radio]').not(this)
            .prop('checked', false);
    }
});
*/
  </script>
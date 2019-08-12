<?php
include_once('connection.php');
session_start(); 
?>

<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
<head>
<title>I Am An Nitian | Success Story</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="icon" href="images/imnitian.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/login_register.css" rel="stylesheet"  type="text/css">
<link href="css/story.css" rel="stylesheet"  type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body onload="loadme()">
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
<div id="loader">
</div>
 <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>   
  
<div class="wrapper">
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

<li><a href="index.php#about" class="homex" id="about_nav">About Us</a></li>

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
  <img  src="images/chess.png" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'>
<div class="str" data-aos="fade-up" data-aos-duration="600" data-aos-once='true' data-aos-delay="600">Success Stories</div>
</div>

<div class="main">

<div class="number" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'><p>1</p></div>


<div class="child_x">

<div class="hero" data-aos="fade-up" data-aos-duration="600" data-aos-once='true' data-aos-delay="400"> 
    <div class="himg">
    <div><img src="images/toppers/rajat_soni.jpg" /></div>
    <div><p>Rajat Soni</p>
    <p>AIR-1 GATE 2019</p>
    <p>NIT Warangal, ECE</p>
    </div>
    </div>
    
    <p id="queryx">

 Hi! I am Rajat Soni. I belong to district Jabalpur 
(M.P.). After getting a decent rank of 2474 in JEE (Main)-2014 
along with class 12, I decided to join National Institute of 
Technology, Warangal. I did my B.Tech. in Electronics and 
Communication Engineering (Batch of 2018). 
<br>
<span id="query">
1) What was your routine study schedule in 
NITW? How much was your CGPA?</span><br>
 My routine schedule was like most of the students.
 Bunking classes gave more thrill than anything else. 
 Everyone knows how famous ECE Department of NITW is. 
 Last minute completion of folders and projects was a 
 normal story. Academics seemed to be a long lost friend as 
 we approached the third year. As a result, my CGPA dipped 
 down to 8.54 by the time I graduated.
 <br>
 <span  id="query">
2) Where you involved in any Club/Society/Organizing 
Team of College? If yes, did they provide you any edge 
in preparation or overall?</span>
<br>
 I was a part of Electronics Amateur and HAM 
(EA & HAM) Club right from my second year. It was
 essentially due to my interest in practical applications of electronics. 

 </p>
<button type="button" id="btnk" onclick="spyk()">Read More <i class="fas fa-chevron-circle-right"></i></button>

<p id="showmek">

 I got the opportunity to serve the club as a General Secretary in the year 2017-18. 
 <br>
 <span id="query">
3) What was your aim at, and expectations from NITW?</span>
<br>
 I never knew what I was expecting.
 Being a top level NIT, the reputations were 
 very good. It was hard to leave home and 
 live in hostels, eat in mess, attend 5:30
 AM EAA and what not. But now I miss it the most.
 <br>
 <span  id="query">
4) When did you first thought of starting
 preparations for GATE Examinations?
 </span>
 <br>
 I had it in my mind since the third year.
 But due to lack of time and motivation, I couldn’t dare to
  take a step forward for that. I gave GATE 2018 with incomplete
   preparation. The result was not very satisfactory.
    I also had many opportunities to meet people who
     had cleared the prestigious examinations of 
     GATE and ESE. That motivated me each time.
     <br>
 <span  id="query">
5) What was your initial preparation plan?
</span>
<br>
 I knew it would take extraordinary
 efforts since I had to start from scratch. 
 I did not continue my preparation after GATE 
 2018. So I decided to take the help from
  various institutes. However I relied mostly 
  on self-study as it is the most important 
  aspect of preparation for any competitive examination.

  <br>
 <span  id="query">
6) Did you apply for campus placements? Were you placed in any company?
</span><br>
 I did an Internship in Samsung 
Semiconductors India R&D (SSIR) Bangalore
in summers of 2016-17. Fortunately I got a pre placement offer as well.
 So I didn’t need to sit for campus placements.
7) How much time did you devote on daily basis for Gate preparations?
ANSWER: Apart from classes I used to devote around 5-6 hours daily for
 revision and solving previous years’ papers. 
 <br>
 <span  id="query">
8) Did you take any coaching for GATE Examinations?
 (include Test series).</span>
<br>
 Yes. As I said earlier, coaching do help to give a 
proper direction towards the preparation. I joined regular 
Classroom Course in Made Easy. Along with that, 
I joined the test series of Ace Academy and Gate Academy.

<br>
 <span  id="query">
9) What we're the study materials/books which you relied upon?</span>
<br>
 Mostly the classroom notes are self-sufficient.
 If any doubt’s remained, YouTube was the best source 
 to get my doubts cleared instantly on any topic.
 <br>
 <span id="query">
10) Anytime during preparation, did the thought 
of backing out hit your mind, like you felt that
 you won't be able to achieve the set goal?
 </span><br>
A couple of times actually. Frustration 
and demotivation naturally tend to come during preparation.
 Nothing beats a low test scores and a heavy topic for the day. 
I used to talk to my parents whenever I felt low.
 They motivated me to continue my preparation. 
 <br>
 <span  id="query">
11) How many marks/rank were you getting in 
Test series?(In case you took any)</span><br>
 I started attempting the test series from the month of 
January. Initially my scores used to be within 60-65. 
Later they increased till 70-75 and at the end they even touched 80.
<br>
 <span  id="query">
12) What was your final preparation plan?
</span><br>
 Last one month is very crucial in GATE exam preparation.
I used to revise my short notes on regular basis. 
I used to attempt 2 tests per day. As my actual 
GATE exam was in forenoon session, I tried my best 
to give one test daily in that same time slot.
<br>
 <span  id="query">
13) How many marks did you expect before paper?</span><br>
 Frankly, I never thought about my marks 
before the exam. It is actually better not to have any presumptions 
about the paper. It can jeopardize your performance and your results.

<br>
 <span  id="query">
14) Were you having any intuitions of bagging AIR 1?</span><br>

 Well, I used the rank predictors before IIT
 Madras released its official answer key. They 
 were showing my rank somewhere in between 10-15. 
 After that I didn’t bothered much about the result and left it to the fate.
 <br>
 <span id="query">
15) What was your first response when you came to know about topping the GATE 2019?</span><br>
 It was 15th of March when IITM was
 expected to follow the trend by declaring the result one day prior to
  official date. I was having my lunch just then I 
  randomly tried to open the GATE website to check the status.
  I logged in. The results were out. I scrolled down. 
  I saw the digits ‘10’ in the box. I knew that would 
  be the range of AIR I was expecting. To my surprise, 
  when I slid the page to the right, the number turned 
  out to be ‘1000’. Yes that was my GATE score. A perfect
   ‘1000’. Above that was written AIR 1. I couldn’t believe
    my eyes for a moment. I allowed that moment to sink
     in and called my parents to share that precious moment.
     <br>
 <span  id="query">
16) What are your further goals in life?</span><br>
 I have kept all the fronts open. I don’t 
want to be too hard on myself. I would keep exploring 
the different opportunities I can have with this GATE score.
<br>
 <span  id="query">
17) Would you like to say anything to GATE Aspirants?</span><br>
 Yes. I would suggest sticking to standard source for 
preparation. Avoid unnecessary books and material.
 Concentrate on previous year papers. Do them multiple 
 times. Note down your mistakes. Keep revising even
  in your free time. Time is a beautiful gift we have. 
  Never under estimate your potential. Sky is not 
  the limit, your vision is. It does not matter from 
  which college you did your graduation or how good
  were you in your 10+2. What all matters is how 
  willing are you to give up everything you have
   right now just to fulfil the dream you had once seen. 
“To cross the ocean, you must have the courage to leave the sight of the shore.”
<br>
Thanks a lot!      
</p>
</div>
</div>


<div class="number" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'><p>2</p></div>

<div class="child_x" style="margin-bottom:25px;">

<div class="hero" data-aos="fade-up" data-aos-duration="600" data-aos-once='true' data-aos-delay="400"> 

    <div class="himg">
    <div><img src="images/toppers/ankit_singh.jpg" /></div>
    <div><p>Ankit Kumar</p>
    <p>AIR-7 GATE 2019</p>
    <p>NIT Durgapur, ECE</p>
    </div>
    </div>

    <p>
    Hello everyone , my name is Ankit Kumar and I got AIR 7 
    in Gate 2019 (ECE).  
I am from 'Maner' , a village in Patna district of Bihar. 
I started my gate preparation in the month of October
2017, that was my 5th semester. I started by a good 
knowledge of the exam and it's preparation strategy. So
I watched almost all Youtube videos and read lot of 
answers on quora. Like most of the students ,I started 
with network and studied network for 2 months then in 
December I started control and I was studying control 
till February.<br>I realised one thing that students 
around me were devoting a lot of time in their preparation 
and I couldn't give that much because I was very busy with 
my college life . Apart from regular classes and labs I was 
involved with NSS and dramatics club so I choose a different 
strategy , I thought that out of 1 lac students what makes
 me different or topper. So I made plan for whole year,
  for whole month, for whole week and for next day. 
  I planned on completing the syllabus till September 
  and then go for test series I then completed EDC, 
  signal and system and other subjects .
  But in summer 
  holidays, I did swachh Bharat summer internship and a
  training in ntpc so I lost two months, but it was my
  luck that I got placed in August in a company named 
  'Capgemini'.
  </p>
    <button type="button" id="btnz" onclick="spyz()">Read More <i class="fas fa-chevron-circle-right"></i></button>

<p id="showmez">
  After this I could have left preparation 
    for gate. But it was my luck that I feel jealous a lot 
    and students around me used to prepare for gate and I 
    was not. So I started my preparation again and completed 
    subjects like communication, EMT and other but again in
     the month of November. I started taking interest in college 
     politics and thus wasted 1 month but it was the month of December 
     that brought a lot of change in me. I started giving full length
      tests and made a separate notebook for it, I started writing
       important points derived from it, I made audio notes for me
        and December brought biggest change in my preparation. Again 
        in January I continued the same habit of test and preparation and
        in February when meta and mechanical guys said that their gate paper 
        was easy , I gained a lot of confidence, just revised my short 
        notes and gave it a clear shot. I didn't study in the last week.
   <br>
   Thank You
</p>

</div>

</div>


</div>

<p class="next next_btn" style="float:right;padding:0 0.4rem 0 0.4rem;"> 
 <a href="story2.php">Next Story <i class="fas fa-chevron-circle-right"></i></a></p>

 <p class="next next_btn_mob" style="width:35%;margin:0 auto;padding:0.1rem;"> 
 <a href="story2.php">Next Story <i class="fas fa-chevron-circle-right"></i></a></p>

<p class="next" id="lnk" style="margin-top:4rem;"> List of nitians who did splendid performence in Gate 2019<span id="hide"><br></span><a href="gate_topper_list.php">Click Here</a></p>
<p class="next" id="lnk"> List of nitians who cracked Engineering Services Exam 2019<a href="ese_topper_list.php"><span id="hide"><br></span>Click Here</a></p>
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

    <p class="p2"><a href="uPDxgdf.php">privacy policy</a></p>
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
<option> NIT Uttrakhand </option>
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
<option> NIT Raurkela </option>
<option> VNIT Nagpur </option>
<option> NIT Trichy </option>
<option> NIT Warangal </option>
<option> MNNIT Prayagraj (Allahabad) </option>
<option> SVNIT Surat </option>
<option> NIT Suratkal </option>
<option> Other </option>
      </select>
      <select name="state" id="state"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
          <option>Select Your State</option>
          <option> Uttar Pradesh </option>
<option> Bihar </option>
<option> Rajsthan  </option>
<option> Madhya Pradesh  </option>
<option> Maharastra </option>
<option> Andhra Pradesh </option>
<option> Arunachal Pradesh </option>
<option> Aasam</option>
<option> Chhattisgarh </option>
<option> Odisha </option>
<option> Goa </option>
<option> Gujrat </option>
<option> Haryana </option>
<option> Himachal Pradesh </option>
<option> Jammu & Kashmir </option>
<option> Jharkhand </option>
<option>  Karnatka </option>
<option> Kerla </option>
<option> Manipur </option>
<option> Mizoram </option>
<option> Tripura </option>
<option> Nagaland </option>
<option> Punjab </option>
<option> Sikkim </option>
<option> Tamilnadu </option>
<option> Uttrakhand </option>
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
  <p id="cont">iamannitian@gmail.com &nbsp &nbsp| &nbsp +91-6202590504 &nbsp | &nbsp  +91-9055667606</p>
 <span id="respo_contact">
 <P>iamannitian@gmail.com</p> 
 <P>+91-6202590504</p> 
 <P>+91-9055667606</p> 
   </span>
</div>
 <div class="container">
 <p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
2019 &nbsp| &nbsp I AM AN NITIAN <span id="developer">&nbsp | &nbspAll Rights Reserved</span></p>
<p id="and_copy" class="copyright">All rights reserved</p>
</div>
</footer>
</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>

<script>
  AOS.init({ disable: 'mobile' }); 
</script>

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

function spyx()
{
$('#btnx').hide();
$('#showmex').show();
}
function spyy()
{
$('#btny').hide();
$('#showmey').show();
}
function spyz()
{
$('#btnz').hide();
$('#showmez').show();
}
function spyk()
{
$('#btnk').hide();
$('#showmek').show();
}
  </script>
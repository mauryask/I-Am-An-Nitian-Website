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
<style>

</style>
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

<div class="main">

<div class="number" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'><p>3</p></div>


<div class="child_x" style="margin-bottom:25px;">

<div class="hero" data-aos="fade-up" data-aos-duration="600" data-aos-once='true' data-aos-delay="400"> 
    <div class="himg">
    <div><img src="images/toppers/abhishek_kumar.jpg" /></div>
    <div><p>Abhishek Kumar Sinha</p>
    <p>AIR-23 GATE 2019</p>
    <p>NIT Patna, Mechanical</p>
    </div>
    </div>
    <p>
        My name is Abhishek Kumar Sinha. 
        I got AIR 23 in Mechanical Engineering with 88.29 marks.
        .I have prepared through self study
          and with standard books. Well I have tried to write it in story so you would better 
          relate it. my story is not very inspiring. This story is specifically for self study 
          students who are preparing through standard books. There are a lot of queries 
          regarding students like how to make notes, give test series.
          <br> I will try my best to address this.
    If you dont have any knowledge about your subjects then you need atmost 1.5 years for it.
    here it starts : I have started my preparation from 4 semester. In this time whatever was
    being taught in college I just solve previous year question from it that's it.
    During summer years I have started making notes for subjects from standard books ( I will 
    tell you afterwards that it was not helpful). Also, I want to add. be very attentive see 
    videos of 'Chandresh Mahajan 'Sir, 'Ankit Goyal' sir They are enough for you to guide. 
    I have continued this process of making notes and solving previous year upto 5 
    semester. From six semester, I have two tasks, to study what is in sixth semester
    gate and revise previous subjects. 
    
    </p>
<button type="button" id="btny" onclick="spyy()">Read More <i class="fas fa-chevron-circle-right"></i></button>

<p id="showmey">
    
    This process is not so straightforward, 
    I remember that while preparing fluid mechanics from SK SOM I end up completing,
      90% of civil fluid mechanics syllabus. But since I have time I get hold of it.
    now came most important part. I have fixed a deadline that whatever happens on 1 
    june 2018 I will start my first test. at that I was doing my training at HAL bangalore. 
    I have purchased ACE test series and give first topic wise test and I got
    12 out of 20 and in next it improved to 11. I understand something is missing 
    search the net and I found I have to make short notes. So I just write the 
    important formulas, concepts. It is hardly 30 pages for all subjects at that 
    time. I just revise it and give the test still my marks are more or less same.
      In manufacturing limits and tolerance I got 3/25 !.see this process is of many 
      ups and down but you need to enjoy it and having self study you will see some
      questions are new and some questions you dont know the concepts. I note it 
      and keep updating my short notes. By the time I completed the subject test 
      my short note change to 100 page. Now I move to made east ( the most awaited
        test series) the questions are tough but i have covered the concepts (ace) 
        I just need to practise good questions but questions are becoming irrelevant 
        test by test. then came chandresh mahajan sir video on how to choose test 
        series and I joined exergic in end september. Questions are really good and 
        conceptual although some printing mistakes but you will not find such 
        quality anywhere. <br>Now in october I started doing full length test 
        starting made easy seeing the questions I was blanked.I just start the 
        test and finish it and solve its questions but its questions are good. I 
        continued this procedure of giving notes, updating short notes. In all this
        process I dont see my original notes and For gaining some concepts I directly 
        go to NPTEL. Never ever think about rank and in the words of chandresh 
        mahajan sir the purpose of test series is to solve questions.
    P.S.- In ACE Full length during last phase my average marks was 78. In exergic 
    , I didn't get good marks but learned the most in this. and In made easy I am telling you.
    In the end The most Important thing enjoy the process, make your own strategy 
    ( Just start and things began to fall in line trust me it will) and find your 
    strength and you will get score better than me.
  <br>
    NIT PATNA Family 
    <br>
    "Student Activity Center, NITP

</p>
</div>

</div>

<div class="number" data-aos="fade-up" data-aos-duration="600" data-aos-once='true'><p>4</p></div>

<div class="child_x" style="margin-bottom:25px;">

<div class="hero" data-aos="fade-up" data-aos-duration="600" data-aos-once='true' data-aos-delay="400"> 

    <div class="himg">
    <div><img src="images/toppers/ankur_agarwal.jpg" /></div>
    <div><p>Ankur Agrawal</p>
    <p>AIR-65 GATE 2019</p>
    <p>NIT Raipur, Mechanical</p>
    </div>
    </div>

    <p>
            Hi friends, I want to share my success story with you all.
            I hope some of you may get motivated after reading my struggle.
        My All India Rank (AIR) in GATE 2019 Mechanical stream is 65.
        A little background about me, I did my B.tech from NIT Raipur
        2014–18. I got admission in NIT Raipur after taking a 
        drop of 1 year and I went KOTA for JEE MAINS. I am from 
        a small town in Chhattisgarh so education (11th, 12th)
          was not much competitive in nature so that should explain my drop.
        Now enough about my ancient history, let’s talk about GATE.
        I was in my 4th semester and I knew I wanted a GOVT. job 
        (Cliched Indian) but anyway my aim was pretty clear to me.
        Now at the starting of my 5th semester (July 16) after 
        returning from vacations I joined a coaching in Raipur
          itself. I started sincerely reading the subjects which 
          were going on in Coaching. <br>I did not study in my previous
          4 semesters for knowledge and only few days before end 
          semester exams so that I can maintain a decent pointer. 
          So in coaching I kind of started from the beginning of 
          every subject. Anyway this continued for like 5th and 6th
            semester. Life was mundane, only the dates were 
            changing and days remain the same. 
            
            </p>
<button type="button" id="btnx"   onclick="spyx()">Read More <i class="fas fa-chevron-circle-right"></i></button>

<p id="showmex">
            
            Only study and study and study.
        Now 7th semester started and campus placements knocked at 
        the door of NIT Raipur. I belong to a lower middle class
        family and GATE exam is like gambling or a T-20 cricket
          match. If it’s not your day then no matter how much 
          you have practiced or how much of a prodigy you are, 
          it just wouldn’t matter. So keeping this in mind, I 
          sat for campus placements.
        I knew this was only a formality as I was very
        confident that I will crack GATE in my first attempt 
        itself. So without wasting any precious time I appeared 
        for IT companies in which Mechanical people were allowed.
          There were two reason for taking this step —<br>
        i) As soon as I get placed, I can focus on my
        GATE studies and there will be comfort knowing 
        that I have a backup to support my family.<br>
        ii) I chose IT company over Core companies although having 9.2
        CGPA (yeah those last days studies for pointer worked 
        quite well :D) because in IT companies there 
        will be no physical work and so I will be able to
          save energy for studying for next year GATE.
          <br>
        I got placed in an IT company in OCTOBER 11 and that
        was a relief because I had four tension free months ahead of me for GATE 18.
        7th semester exam ended and I went home for last 
        two months before GATE and this is when all hell broke 
        down on me. In just 10 days I had a minor surgery of my 
        leg, I was diagnosed with Kidney stones(3), I started 
        suffering from Sciatica(kind of back pain) and last 
        but not the least urine Infection (4 times in next 40 days).
        But even suffering from all these I couldn’t give up because
        so much hard work I have already poured in for this noble
          cause that backing off was just not an option. So I continued 
          studying in pain. Those were very very bad days for me.
          I didn’t have time for consulting doctors after travelling
            to any nearby city( as I live in a small town). I settled 
            with temporary treatment. I started taking full
            length tests in January 2018. I joined Made 
            easy and Ace academy test series. So 25 tests
              for next 25 days. <br>I scored really well in 
              tests and my rank was always under 100. Top 10 in 8 tests.
              That boosted my confidence and I tried to be focused.
        The D-day came and I got nervous in the exam, My urine problem
        kicked in during the exam and heavy back pain started during 
        the examination. I was feeling helpless like I was seeing my 
        dreams slipping away from my hands and I couldn’t do anything. 
        I knew every question I was solving I was doing some mistakes 
        but so much was going on I just wanted it to be finished.
          When I came out of Examination hall, I knew exactly that 
          I have made my next 1 year very very harder, probably 
          my whole life but I gave my 200% what else a human can
          do than to try.
        I went in depression, I felt like my world has ended. In
        the meanwhile I cleared BARC written exam. College 
        ended I went home and I started preparing for BARC
          interview. I really did not feel like preparing 
          for interview as I was still in mourning and 
          the preparation was just nominal.
        When I came back from Interview(which obviously did not 
        went well) I realized that’s it and there were 2 
        moths left for my joining (Camus Placed).
        <br> I went into 
        preparation mode and in 2 months I completed 8 subjects out of 10.
        I joined the job and everyday I approximately got 4–5
        hours of study beside sleeping(6 hours). It was a 
        very hard time for me. I felt that I did not belong
          there in IT sector but I had my aim clear. 
          It was like lose a war win a battle situation.
          I knew this job is only an income source nothing
          else. I had this fire inside me to avenge my 
          failure of previous year. Only thing I could think 
          of is planning and plotting my studies and how to
            execute it. I knew what went wrong in my last 
            year’s exam and so I took all three CBT’s 
            ( 2 from made easy and 1 from ACE) so that I
            can work on my nervousness.<br>
        Finally I took GATE 2019 and this time the luck was
        in my favor and life finally decided to reward me 
        with the gift I have deserved a year ago. As soon 
        as I came out of exam hall, I felt it in my bones 
        that I did it :)
        This was my experience in very brief. 
        I cannot explain what Pain I have gone 
        through to get this pleasure in stark sentences.
        Anyway the gist is if you have
        confidence in yourself then you must continue. 
        Either with positive attitude or negative that 
        doesn’t matter, only thing matters is that you
          continue the same everyday a little better
          smiling or crying your choice.<br>
          Thank you all for helping me get here.
          <br>
"Public & Media Relations Cell, NIT Raipur"
</p>

</div>

</div>


</div>
<p class="next" id="lnk" style="margin-top:2rem;"> List of nitians who did splendid performence in "Gate 2019" <span id="hide"><br></span><a href="gate_topper_list.php">Click Here</a></p>
<p class="next" id="lnk"> List of nitians who cracked "Engineering Services Exam 2019" <a href="ese_topper_list.php"><span id="hide"><br></span>Click Here</a></p>
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
<option> NIT Surathkal </option>
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

</script>


<script>
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
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
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/login_register.css" rel="stylesheet"  type="text/css">
<link href="css/more-news.css" rel="stylesheet"  type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="css/ca_portal.css" rel="stylesheet">
<style>

</style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

<div class="title">
  <span class="t1">Dashboard</span>
<span class="t2">Facebook Posts</span>
<span class="t3">Tasks</span>
<span class="t4">Guidelines</span>
<span class="t5">Contacts</span>
</div>

<div class="logo" onclick="location.href='index.php'">
  <img src="images/imnitian.png">
  <p>I Am An Nitian</p>
</div>

<div class="user">
  <img src="images/man.svg">
  <p>Hi Abhinav</p>
</div>



<div class="wrapper">  




<div class="menu">

<div><p>CA Portal</p></div>

<div class="mn_btn">
<button id="dash">Dashboard</button>
<button id="post">Posts</button>
<button id="task">Tasks</button>
<button id="guide">Guidelines</button>
<button id="contact">Contacts</button>
<button id="logout">Logout</button>
</div>
</div>





<div class="icons" >

<div class="card">
<div><p>1</p></div>
<p>Total Points</p>
</div>

<div class="card">
  <div><p>20</p></div>
  <p>Tasks Completed</p>
</div>

<div class="card">
<div><p>25</p></div>
<p>Posts shared</p>
</div> 


<!-- Second Slide -->


<div class="cardx card">
<div><img src="images/coding.jpg"></div>
<span>
  The lorem ipsum text is 
  typically a scrambled
   section of De finibus 
   bonorum et malorum
</span>
<p >
  <iframe 
   src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&appId=473134703234415&width=73&height=28"
    width="73" 
    height="28" 
    style="border:none;overflow:hidden" 
    scrolling="no" 
    frameborder="0" 
    allowTransparency="true"
    allow="encrypted-media">
  </iframe>
</p>
</div>

<div class="cardx card">
  <div><img src="images/musical.jpg"></div>
<span>
  The lorem ipsum text is 
  typically a scrambled
   section of De finibus 
   bonorum et malorum
  </span>
  <p>
  <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&appId=473134703234415&width=73&height=28"
    width="73" 
    height="28" 
    style="border:none;overflow:hidden" 
    scrolling="no" 
    frameborder="0" 
    allowTransparency="true"
    allow="encrypted-media">
  </iframe>
  </p>
</div>

<div class="cardx card">
<div><img src="images/graduation.jpg"></div>
<span>
The lorem ipsum text is 
  typically a scrambled
   section of De finibus 
   bonorum et malorum
  </span>
<p>
<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&appId=473134703234415&width=73&height=28"
    width="73" 
    height="28" 
    style="border:none;overflow:hidden" 
    scrolling="no" 
    frameborder="0" 
    allowTransparency="true"
    allow="encrypted-media">
  </iframe>
</p>
</div> 

<div class="msgx">share these posts on your facebook news feed before they disappear
  <br>and earn points
</div>

<!-- Third Slide -->

<div class="tasks">
  Will be updated soon..
</div>



<!-- fourth Slide -->


<div class="cardy cardx">
<div style="background:green;
border-top-right-radius:40px;
border-top-left-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:40px;
border:2px solid #282828;
height:235px;">
<img src="images/varun.png" style="">
</div>
<p>Lokesh Yadav</p>
<p>9055667606</p>
</div>

<div class="cardy cardx">
<div style="background:green;
border-top-right-radius:40px;
border-top-left-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:40px;
border:2px solid #282828;
height:235px;">
<img src="images/ashish.jpg" style="">
</div>
<p>Tarun Mishra</p>
<p>9055667606</p>
</div>

<div class="cardy cardx">
<div style="background:green;
border-top-right-radius:40px;
border-top-left-radius:5px;
border-bottom-right-radius:5px;
border-bottom-left-radius:40px;
border:2px solid #282828;
height:235px;">
<img src="images/ubaid.png" style="">
</div>
<p>Abhay Mishra</p>
<p>9055667606</p>
</div>






</div>


</div>


<footer>
  <p>Copyright <i class="far fa-copyright"></i> 2019 | I am an nitian</p>
</footer>

</body>

</html>



<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<!--==================  aos.js  CDN  ==================-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--==================  Local Js Files  ==================-->
<script   type="text/javascript" src="js/main.js"></script>

<script>
  AOS.init({ disable: 'mobile' }); //disabling the animations in mobile version
</script>

<script>

$(document).ready(function()
{

$('#dash').click(function(){
  $(this).css({'background': '#282828', 'color':'white'});
  $('.t2').fadeOut(1000).css('display', 'none');
  $('.t3').fadeOut(1000).css('display', 'none');
  $('.t4').fadeOut(1000).css('display', 'none');
  $('.t5').fadeOut(1000).css('display', 'none');

  $('.t1').fadeIn(1000);
  $('.card').css('display', 'flex'); 
  $('.cardx').css('display', 'none');
  $('.tasks').css('display', 'none');
  $('.cardy').css('display', 'none');
  $('.msgx').css('display', 'none');

//button control
  $('#contact').css({'background':'none', 'color':'#050505'});
  $('#post').css({'background':'none', 'color':'#050505'});
  $('#task').css({'background':'none', 'color':'#050505'});
  $('#guide').css({'background':'none', 'color':'#050505'});

});


$('#post').click(function(){
  $(this).css({'background': '#282828', 'color':'white'});
  $('.t1').fadeOut(1000).css('display', 'none');
  $('.t3').fadeOut(1000).css('display', 'none');
  $('.t4').fadeOut(1000).css('display', 'none');
  $('.t5').fadeOut(1000).css('display', 'none');
   
  $('.t2').fadeIn(1000).css('display', 'block');
  
  $('.card').css('display', 'none');
  $('.tasks').css('display', 'none');
  $('.cardx').css('display', 'flex');
  $('.cardy').css('display', 'none');
  $('.msgx').css('display', 'block');


//button control
  $('#dash').css({'background':'none', 'color':'#050505'});
  $('#contact').css({'background':'none', 'color':'#050505'});
  $('#task').css({'background':'none', 'color':'#050505'});
  $('#guide').css({'background':'none', 'color':'#050505'});

})


$('#task').click(function(){
  $(this).css({'background': '#282828', 'color':'white'});
  $('.t1').fadeOut(1000).css('display', 'none');
  $('.t2').fadeOut(1000).css('display', 'none');
  $('.t4').fadeOut(1000).css('display', 'none');
  $('.t5').fadeOut(1000).css('display', 'none');

  $('.t3').fadeIn(1000).css('display', 'block');
  $('.card').fadeOut(1000).css('display', 'none');
  $('.card').fadeOut(1000).css('display', 'none');
  $('.cardy').css('display', 'none');
  $('.tasks').fadeIn(1000).css('display', 'flex');
  $('.msgx').css('display', 'none');


//button control
  $('#dash').css({'background':'none', 'color':'#050505'});
  $('#post').css({'background':'none', 'color':'#050505'});
  $('#contact').css({'background':'none', 'color':'#050505'});
  $('#guide').css({'background':'none', 'color':'#050505'});

})


$('#guide').click(function(){
  $(this).css({'background': '#282828', 'color':'white'});
  $('.t1').fadeOut(1000).css('display', 'none');
  $('.t2').fadeOut(1000).css('display', 'none');
  $('.t3').fadeOut(1000).css('display', 'none');
  $('.t5').fadeOut(1000).css('display', 'none');

  $('.t4').fadeIn(1000).css('display', 'block');
  $('.card').fadeOut(1000).css('display', 'none');
  $('.cardx').fadeOut(1000).css('display', 'none');
  $('.msgx').css('display', 'none');

  $('#dash').css({'background':'none', 'color':'#050505'});
  $('#post').css({'background':'none', 'color':'#050505'});
  $('#task').css({'background':'none', 'color':'#050505'});
  $('#contact').css({'background':'none', 'color':'#050505'});

})


$('#contact').click(function(){
  $(this).css({'background': '#282828', 'color':'white'});
  $('.t1').fadeOut(1000).css('display', 'none');
  $('.t2').fadeOut(1000).css('display', 'none');
  $('.t3').fadeOut(1000).css('display', 'none');
  $('.t4').fadeOut(1000).css('display', 'none');

  $('.t5').fadeIn(1000).css('display', 'block');
  $('.card').css('display', 'none');
  $('.cardx').css('display', 'none');
  $('.tasks').css('display', 'none');
  $('.cardy').css('display', 'block');
  $('.msgx').css('display', 'none');

  $('#dash').css({'background':'none', 'color':'#050505'});
  $('#post').css({'background':'none', 'color':'#050505'});
  $('#task').css({'background':'none', 'color':'#050505'});
  $('#guide').css({'background':'none', 'color':'#050505'});

})



})

</script>
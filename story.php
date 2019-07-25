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
<title>I Am An Nitian | Success Story</title>
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
<link href="css/navbar.css" rel="stylesheet"  type="text/css">
<link href="css/popup.css" type="text/css" rel="stylesheet">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="css/story.css" rel="stylesheet">
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

  <header id="f" style="background:rgba(0,0,0,01);">
<div class="logo">
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li class="logo_txt"><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="homex" >Home</a></li>
<li><a href="team.html" class="homex">Our team</a></li>
<li><a href="more-news.php" class="homex" >News</a></li>
<li><a href="index.php#about" class="homex" id="about_nav">About Us</a></li>
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
<div clas="wrapper">
<div class="main">







<div class="child_x">

<div class="hero"> 

    <div class="himg">
    <div><img src="images/varun.png" /></div>
    <div><p>Shubham Maurya</p>
    <p>AIR-1 GATE 2019</p>
    <p>NIT Raipur, Mechanical</p>
    <p>(2014-2018)</p></div>
    </div>

    <p>
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

      </p>
<button type="button" id="btnx" onclick="spyx()">Read More</button>

<p id="showmex">
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has

    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
</p>

</div>

</div>



<div class="child_x">

<div class="hero"> 
    <div class="himg">
    <div><img src="images/kafeel.png" /></div>
    <div><p>Shubham Maurya</p>
    <p>AIR-1 GATE 2019</p>
    <p>NIT Raipur, Mechanical</p>
    <p>(2014-2018)</p></div>
    </div>
    <p>
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
      </p>
<button type="button" id="btny" onclick="spyy()">Read More</button>

<p id="showmey">

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
</p>
</div>

</div>








<div class="child_x">

<div class="hero"> 

    <div class="himg">
    <div><img src="images/gaurangi.jpg" /></div>
    <div><p>Shubham Maurya</p>
    <p>AIR-1 GATE 2019</p>
    <p>NIT Raipur, Mechanical</p>
    <p>(2014-2018)</p></div>
    </div>

    <p>
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets.
     It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker.
     Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
      </p>
    <button type="button" id="btnz" onclick="spyz()">Read More</button>

<p id="showmez">
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has

    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content
         before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
</p>

</div>

</div>



<div class="child_x">

<div class="hero"> 
    <div class="himg">
    <div><img src="images/ubaid.png" /></div><div><p>Shubham Maurya</p>
    <p>AIR-1 GATE 2019</p>
    <p>NIT Raipur, Mechanical</p>
    <p>(2014-2018)</p></div>
    </div>
    
    <p>
        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        </p>
<button type="button" id="btnk" onclick="spyk()">Read More</button>
<p id="showmek">
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.

        In publishing and graphic design, Lorem ipsum is a 
        placeholder text commonly used to demonstrate the 
        visual form of a document without relying on meaningful c
        ontent (also called greeking). Replacing the actual conte
        nt with placeholder text allows designers to design the
        form of the content before the content itself has been produced.
    The lorem ipsum text is typically a scrambled section of De
    finibus bonorum et malorum, a 1st-century BC Latin text by 
    Cicero, with words altered, added, and removed to make it
      nonsensical, improper Latin.
    A variation of the ordinary lorem ipsum text has
    been used in typesetting since the 1960s or earlier, 
    when it was popularized by advertisements for Letraset 
    transfer sheets. It was introduced to the information age 
    in the mid-1980s by Aldus Corporation, which employed it in 
    graphics and word-processing templates for its desktop 
    publishing program PageMaker. Many popular word processors
      use this format as a placeholder. Some examples 
      are Pages or Microsoft Word.
</p>
</div>

</div>










</div>
</div>
</body>
</html>
<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>

<!--==================  Local Js Files  ==================-->
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>

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
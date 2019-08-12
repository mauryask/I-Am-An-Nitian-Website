<?php
include_once('connection.php');
session_start();
?>

<!DOCTYPE html>
<html   lang="en" oncontextmenu="return false">
<head>
<title>B.Tech. Placements | I Am An Nitian</title>

<link rel="icon" href="images\imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya"> 

<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<link href="css/ranking.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">

<style>

.wrapper{
  margin-top:6rem;
}
@media (max-width:921px)
{
  .linkx{
    margin-top:3rem;
   margin-bottom:20px;
  }
  .wrapper{
  margin-top:3.2rem;
}
}

  </style>
</head>

<body onload="loadme()">
        <button id="back-to-top"><i class="fas fa-angle-double-up"></i></button>
        <div id="loader">
          </div>
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
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

<div class="wrapper">
<div class="center">
<p>B.Tech. Placements <br>Of Various NITs</p>
<div class="line_rnk" style="width:21rem;"> </div>
</div>
<div class="clg" >
 <div class="search_clg">
 <p>Search : </p>
<input type="search" id="search" placeholder="eg. srinagar">
</div>

<table>
<th>NIT </th>
<th>2015-16</th>
<th>2016-17</th>
<th>2017-18</th>
<th class="hid">Avg.</th>
<tbody id="placement_wise">

<tr>
<td>NIT Trichy</td>  
<td>6,50,000</td>
<td>6,53,000
</td>
<td>7,50,000
</td>  
<td class="hid">6,84,333</td>
</tr>

<tr>

<td>NIT Rourkela</td>
<td>5,00,000
</td>
<td>5,50,000
</td>
<td>5,98,000
</td>
<td class="hid">5,49,333</td>

</tr>

<tr>
<td>NIT Suratkal</td>
<td>7,00,000
</td>
<td>7,00,000
</td>
<td>7,10,000
</td>
<td class="hid">7,13,333</td>
</tr>

<tr>
<td>NIT Warangal</td>
<td>7,63,875
</td>
<td>7,08,625
</td>
<td>8,37,000
</td>
<td class="hid">7,69,833</td>
</tr>

<tr>
<td>NIT Calicut</td>
<td>6,35,000
</td>
<td>6,00,000
</td>
<td>7,20,000
</td>
<td class="hid">6,51,667</td>
</tr>

<tr>
<td>VNIT Nagpur</td>
<td>5,25,000
</td>
<td>5,21,000
</td>
<td>6,00,000
</td>
<td class="hid">5,48,667</td>
</tr>

<tr>
<td>NIT Kuruksetra</td>
<td>6,20,000
</td>
<td>6,00,000
</td>
<td>6,50,000
</td>
<td class="hid">6,23,333</td>
</tr>

<tr>
<td>MNNIT Allahabad</td>
<td>6,68,000
</td>
<td>7,00,000
</td>
<td>7,95,000
</td>
<td class="hid">7,21,000</td>
</tr>

<tr>
<td>NIT Durgapur</td>
<td>5,00,000
</td>
<td>4,80,000
</td>
<td>5,10,000
</td>
<td class="hid">4,96,667</td>
</tr>

<tr>
<td>NIT Silchar</td>
<td>5,10,000
</td>
<td>5,05,000
</td>
<td>6,09,000
</td>
<td class="hid"> 4,90,000</td>
</tr>

<tr>
<td>MNIT Jaipur</td>
<td>5,77,000
</td>
<td>5,75,000
</td>
<td>6,25,000
</td>
<td class="hid">5,92,333</td>
</tr>

<tr>
<td>SVNIT Surat</td>
<td>5,72,000
</td>
<td>5,75,000
</td>
<td>6,67,000
</td>
<td class="hid">6,04,667</td>
</tr>

<tr>
<td>NIT Hamirpur</td>
<td>5,40,000
</td>
<td>5,11,000
</td>
<td>5,50,000
</td>
<td class="hid">5,33,667</td>
</tr>

<tr>
<td>MANIT Bhopal</td>
<td>5,00,000
</td>
<td>6,00,000
</td>
<td>6,00,000
</td>
<td class="hid">5,66,667</td>
</tr>

<tr>
<td>NIT Meghalaya</td>
<td>3,30,000
</td>
<td>4,00,000
</td>
<td>5,00,000
</td>
<td class="hid">4,10,000</td>
</tr>

<tr>
<td>NIT Agartala</td>
<td>4,96,000
</td>
<td>4,00,000
</td>
<td>5,11,000
</td>
<td class="hid">4,69,000</td>
</tr>

<tr>
<td>NIT Raipur</td>
<td>5,00,000
</td>
<td>6,00,000
</td>
<td>6,00,000
</td>
<td class="hid">5,66,667</td>
</tr>

<tr>
<td>NIT Goa</td>
<td>5,40,000
</td>
<td>5,50,000
</td>
<td>6,00,000
</td>
<td class="hid">5,63,333</td>
</tr>

<tr>
<td>NIT Jalandhar</td>
<td>5,05,000
</td>
<td>5,50,000
</td>
<td>6,60,000
</td>
<td class="hid">5,71,667</td>
</tr>

<tr>
<td>NIT Jamshedpur</td>
<td>5,20,000
</td>
<td>6,00,000
</td>
<td>6,25,000
</td>
<td class="hid">5,73,333</td>
</tr>

<tr>
<td>NIT Patna</td>
<td>4,50,000
</td>
<td>6,00,000
</td>
<td>6,00,000
</td>
<td class="hid">5,50,000</td>
</tr>

<tr>
<td>NIT Manipur</td>
<td>3,65,000
</td>
<td>5,00,000
</td>
<td>5,50,000
</td>
<td class="hid">4,71,667</td>
</tr>

<tr>
<td>NIT Puducherry</td>
<td>4,50,000
</td>
<td>5,00,000
</td>
<td>5,40,000
</td>
<td class="hid">4,96,667</td>
</tr>

<tr>
<td>NIT Nagaland</td>
<td>3,60,000
</td>
<td>4,00,000
</td>
<td>4,00,000
</td>
<td class="hid">3,86,667</td>
</tr>

<tr>
<td>NIT Srinagar</td>
<td>4,90,000
</td>
<td>5,98,000
</td>
<td>5,84,000
</td>
<td class="hid">5,57,333</td>
</tr>

<tr>
<td>NIT Delhi</td>
<td>5,00,000
</td>
<td>5,01,000
</td>
<td>5,25,000
</td>
<td class="hid">5,08,667</td>
</tr>

<tr>
<td>NIT Andhra Pradesh</td>
<td>---
</td>
<td>---</td>
<td>---</td>
<td class="hid">---</td>
</tr>

<tr>
<td>NIT Arunachal Pradesh</td>
<td>4,75,000
</td>
<td>4,38,000
</td>
<td>6,58,000
</td>
<td class="hid">5,23,667</td>

</tr>

<tr>
<td>NIT Uttrakhand</td>
<td>3,99,000
</td>
<td>5,11,000
</td>
<td>5,11,000
</td>
<td class="hid">4,73,667</td>
</tr>

<tr>
<td>NIT Sikkim</td>
<td>4,50,000
</td>
<td>5,00,000
</td>
<td>6,00,000
</td>
<td class="hid">5,16,667</td>
</tr>

<tr>
<td>NIT Mizoram</td>
<td>3,30,000
</td>
<td>3,20,000
</td>
<td>5,00,000
</td>
<td class="hid">3,83,333</td>

</tr>
</tbody>
</table>

<div class="linkx">
<p class="links"> Explore More</p>
<div class="line"></div>
<p><a href="placement2.php" class="x" >M.Tech. Placements</a></p>
<p><a href="gate_topper_list.php" class="x" >Nitians who cracked GATE 2019</a></p>
<p><a href="ese_topper_list.php" class="x" >Nitians who cracked ESE 2019</a></p>
<p><a href="ranking-19.php" class="x" >NITs Ranking</a></p>
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
<option> Jammu and Kashmir </option>
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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script src="js/main.js" type="text/javascript"></script>

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


 $(function()
{ 
    $('#search').on('keyup',function(){

  var value = $(this).val().trim().toLowerCase();
         $('#placement_wise tr').filter(function(){
             $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
         })
    })
})

</script>
<?php
include_once('connection.php');
session_start();
?>
<html lang="en">
<head>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<meta name="theme-color" content="#000">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<title>CA Portal | I Am An Nitian</title>
<link rel="icon" href="images\imnitian.png">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css?family=Playfair+Display&display=swap');
*{
	outline:none;
	margin:0;
	padding:0;
	box-sizing:border-box;
	font-family:sans-serif;
	word-wrap: break-word;
	}
.banner{
	background:url('images\\student.jpg') 100% 100% no-repeat;
    width:100%;
    height:100vh;
    background-position:center;
    position:fixed;
}
.overlay{
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    position:absolute;
}

.overlay .center{
    font-size:50px;
    color:white;
    top:28%;
    left:50%;
    position:relative;
    font-weight:bold;
    text-transform:Capitalize;
    width:500px;
    line-height:60px;
}

.center p{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    letter-spacing:0.6px;
}

.center  button{
    cursor:pointer;
    width:9rem;
    padding:0.4rem;
    background:transparent;
    color:white;
    outline:none;
    font-size:18px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    letter-spacing:0.5px;
    border-color:white;
}


.center  button:hover{
   background:orange;
   transition:0.1s;
}

.sort{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:25px;
    line-height:32px;
  font-weight:normal;
  letter-spacing:0.6px;
  color:orange;
}

.long{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size:14px;
color:orange;
cursor:pointer;
font-weight:normal;
letter-spacing:0.5px;
}

</style>
</head>

<body>

<div class="wrapper">
<div class="banner">
<div class="overlay">
<div class="center" >
<p data-aos="fade-left" data-aos-offset="200"  data-aos-easing="ease-in-sine" data-aos-duration="800">Apply For our Campus Ambassador Program<br>
<span class="sort">Represent the fastest growing network of engineers</span><br>
<button onclick="show_signup()">Apply</button>
<button onclick="location.href='index.php'">Exit</button><br>
<span class="long" onclick="show_log();">already applied ? click here to login</span>
</p>
</div>
</div>
</div>

</div>

<!--Login Signup popup-->

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
<div class="log-card" id="erase_log" style="width:28%;margin-left:0%;">
    <img class="cancel-log"  src="images/cut.png" onclick="cancel_log()">
<div style="padding:1% 10% 0 13%;">
<div class="log-msg"  ><p id="message"><p></div>
  <form  method="post" autocomplete="off">
  <input  id="email" type="text" autocomplete="off" placeholder="Email"  onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
  <input autocomplete="off"  id="pass" type="password" placeholder="Password"   onmousedown="this.style.paddingLeft='10px';this.style.transition='0.2s'" onmouseout="this.style.paddingLeft='2px';this.style.transition='0.2s'">
<div class="select" id="select" style="display:none;">
  <input type="radio" name="user" id="usert" value="1" checked>&nbsp <label class="lab1">User</label>
  <input type="radio" name="user" id="admin" value="2">&nbsp <label>Admin</label>
 </div>
  <button type="button"  name="login" id="ca_login" style="margin-top:1.9rem;
  margin-bottom:3rem;">Login</button>
</form>
</div>
</div>
</div>

</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ca_login.js"></script>
<script   type="text/javascript" src="js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ disable: 'mobile' }); 
</script>
<?php
include_once('connection.php');
session_start();
$id = $_GET['id'];
$sample_rate=1;
$query="select * from tbl_images where  id='".$id."' ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0)
{
    $sql = " UPDATE tbl_images SET views = views + {$sample_rate} WHERE id = ".$id." ";
    mysqli_query($conn,$sql); //counting page views
    mysqli_query($conn, $query);
}

$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html id="<?php echo $row['id']; ?>" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
    
 <meta property="og:url"            content="<?php  echo 'http://www.iamannitian.co.in'.$_SERVER['REQUEST_URI']; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $row['heading']; ?>" />
<meta property="fb:app_id" content="2358880627700744"/>
<meta property="og:description"   content="" />
<meta property="og:image"         content="<?php  echo 'http://www.iamannitian.co.in/'.$row['file_path']; ?>" />


<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<meta name="theme-color" content="#000">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/news.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<style>@import url('https://fonts.googleapis.com/css?family=Playfair+Display&display=swap'); </style>

<title>I Am An Nitian | News</title>
<link rel="icon" href="images\imnitian.png">

</head>

<body onload="loadme()">
    

<body onload="loadme()">
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
<div id="loader">
</div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=2358880627700744&autoLogAppEvents=1"></script>


   <div class="wrapper">
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

<li><a href="more-news.php" class="home" >News</a></li>
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

<div class="news-body">
        <div class="news-img">
     <?php
      echo  '<img alt="news" src="'.$row['file_path'].'"/>';
        ?>        
        </div>
        <div class="news-content">
        <p style="font-weight:bold;font-size:12px;background:#4acf50;
         width:12.5rem;color:rgba(250,250,250,1);
        text-align:center;border-radius:20px;height:30px;margin:1rem 0 1rem 0;"><?php  echo $row['inserted_at'] ?></p>
           <div class="horizon"></div>
           <p>
             <span ><?php  echo $row['heading'];  ?></span><br></p>
           <p style="text-align:justify; margin-top:1rem;
            font-family: 'Playfair Display', serif; font-size:17px;
            letter-spacing:0.3px; 
            color:#050505;">
         <?php echo $row['text']; ?>
        </p>



<div style="margin-top:1rem;" class="fb-share-button" data-href="<?php  echo 'http://www.iamannitian.co.in'.$_SERVER['REQUEST_URI']; ?>" data-layout="button_count" data-size="large">
    <a target="_blank" 
href="https://www.facebook.com/sharer/sharer.php?u=<?php  echo 'http://www.iamannitian.co.in'.$_SERVER['REQUEST_URI']; ?>&amp;src=sdkpreparse" 
class="fb-xfbml-parse-ignore">Share</a></div>
         
            <div class="horizon horizonx"></div>
         <p class="ldc">
         <i class="far fa-thumbs-up like-btn" style="cursor:pointer;"  id="<?php echo $row['id'];  ?>"></i> <span id="x" class="x">0</span>
            &nbsp <i class="fas fa-eye" style="cursor:pointer;"></i> <span  class="x"><?php echo $row['views'];  ?></span>
            &nbsp <i class="far fa-comment" style="cursor:pointer;" id="cmt_color"></i> <span id="ncmt" class="x">0</span>
          </p> 
        <p class="cmnt">Comments</p>
    </div>

    <div class="comments"> </div>

    <div class="txtar">
    <form method="post" enctype="multipart/form-data" id="comment_form">
      <textarea rows="6" placeholder="Write Your Comments Here..." id="comment_content"></textarea><br>
    <button class="btnx" id="comment_btn" type="button">Comment</button>
    </form>
    </div>
 
        </div>
<div class="ad-body">
<p class="latest">Latest News<p>
<?php 
            $query = "select * from tbl_images where id!='$id'  order by id asc limit 7 ";
             $rslty = mysqli_query ($conn, $query);
                if (mysqli_num_rows($rslty)>0) 
                {
                    while ($row = mysqli_fetch_assoc($rslty))
                     {
                      $id = $row["id"];
                      $head = implode(' ',array_slice(explode(' ', $row['heading']),0,6)); 
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,10)); 
                     echo   '<div class="flash">
                     <a href="news.php?id='.$id.'">
                      <div class="nimg"><img alt="news" src="'.$row['file_path'].'"/></div>';
                     echo    '<div class="ncontent">'."<p>".'<span class="heading">'.$head.'</span>'." ".$text.'..</p></div></a>';
                     echo '</div>';
                    
                     }
                }
               else 
               {
                 echo '<p style="text-align:center;">No result found</p>';
               }
              ?>      
                     <div class="nad" style="display:none">
                   <img src="images/ad-book.gif" class="nad-img" >
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

<!--= Responsive Design for mobile =-->
<div class="side-body">
<p class="latest">Latest News<p>
  <div class="latest-line"></div>
<?php 
            $query = "select * from tbl_images where id!='$id'  order by id asc limit 7 ";
             $rsltz = mysqli_query ($conn, $query);
                if (mysqli_num_rows($rsltz)>0) 
                {
                    while ($row = mysqli_fetch_assoc($rsltz))
                     {
                      $id = $row["id"];
                      $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,12)); //getting fires 19 words from text
                      echo   '<div class="flash">
                      <a href="news.php?id='.$id.'">
                       <div class="nimg"><img alt="news" src="'.$row['file_path'].'"/></div>';
                      echo    '<div class="ncontent">'."<p>".'<span class="heading">'.$head.'</span>'." ".$text.'..</p></div></a>';
                      echo '</div>'; 
                     }
                }
               else 
               {
                 echo 'No result found';
               }
              ?>
            
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

<p class="copyright" id="developer">Developer | Shubham Maurya | NIT Srinagar
 <span id="github">| <a href="https://github.com/pnstech" target="_blank" style="text-decoration:none;color:rgba(256,256,256,0.7);">Github</a></span></p>

</div>
</footer>
</div>
</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/rating.js" type="text/javascript"></script>
<script src="js/comment.js" type="text/javascript"></script>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>

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
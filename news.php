<?php
include_once('connection.php');
session_start();
$id = $_GET['id'];
$sample_rate=1;
$query="select * from tbl_images where  id='".$id."'  ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0)
{
    $sql = " UPDATE tbl_images SET views = views + {$sample_rate} WHERE id = ".$id." ";
    mysqli_query($conn,$sql); //counting page views
     $result = mysqli_query($conn, $query);
     $row=mysqli_fetch_array($result);
}
?>

<html id="<?php echo $row['id']; ?>">
<head>
<title>I Am An Nitian | News</title>

<link rel="icon" href="images\imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="css/footer.css" type="text/css" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/news.css" type="text/css" rel="stylesheet">
<link href="css/login_register.css" type="text/css" rel="stylesheet">
<style>
@media (max-width:991px)
{
   .menu-toggle{
		margin-top:30px;
    }
}

  </style>
</head>

<body onload="loadme()">
        <button id="back-to-top"><i class="fas fa-angle-double-up"></i></button>

        <div id="loader">
          </div>

   <div class="wrapper">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>

<header id="f" style="background:black;">
<div class="logo" >
<ul>
<li><a href="index.php"><img src="images\imnitian.png"></a></li>
<li><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;" >I AM AN NITIAN</a></li>
</ul>
</div>
<nav class="active">
<ul>
<li><a href="index.php" class="home" >Home</a></li>
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
 


<div class="news-body">
        <div class="news-img">
     <?php
      echo  '<img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/>';
        ?>        
        </div>
        <div class="news-content">
        <p style="font-weight:bold;font-size:13px;"><?php  echo $row['inserted_at'] ?></p>
            <p>
         <span><?php  echo $row['heading'];  ?></span><br>
         <?php echo $row['text']; ?>
        </p>
         <p class="ldc">
            <i class="far fa-thumbs-up like-btn" style="cursor:pointer;"  id="<?php echo $row['id'];  ?>"></i> <span id="x" class="x">0</span>
            &nbsp <i class="far fa-thumbs-down dislike-btn" style="cursor:pointer;" id="<?php echo $row['id'];  ?>"></i> <span id="y" class="x">0</span>
            &nbsp <i class="fas fa-eye" style="cursor:pointer;"></i> <span  class="x"><?php echo $row['views'];  ?></span>
            &nbsp <i class="far fa-comment" style="cursor:pointer;" name="comment"></i> <span id="ncmt" class="x">0</span>
            </p>
        <p class="cmnt">Comments</p>
    </div>

    <form method="post" enctype="multipart/form-data" id="comment_form">
    <div class="txtar"><textarea rows="6" placeholder="Write Your Comments Here..." id="comment_content"></textarea><br>
    <button class="btnx" id="comment_btn" type="button">Comment</button>
    </form>
    </div>

    <div class="comments">
 
    </div>
        </div>
<div class="ad-body">
<p class="latest">Latest News<p>
<?php 
            $query = "select * from tbl_images where id!='$id'  order by id asc limit 7 ";
             $result = mysqli_query ($conn, $query);
                if (mysqli_num_rows($result)>0) 
                {
                    while ($row = mysqli_fetch_assoc($result))
                     {
                      $id = $row["id"];
                      $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,14)); //getting fires 19 words from text
                    echo   '<div class="flash">
                      <div class="nimg"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>';
                  echo    '<div class="ncontent">'."<p>".'<span class="heading">'.$head.'</span>'." ".$text.'..<a href="news.php?id='.$id.'">'.'<span><br/></span>'." Read More".'<i class="fas fa-chevron-circle-right"></i>'.'</a>'.'</p>'.'</div>';
                 echo '</div>'; 
                     }
                }
               else 
               {
                 echo 'No result found';
               }
              ?>
             
       
                     <div class="nad">
                   <img src="images/ad-demo.jpg" class="nad-img" >
                      </div>  
    </div>

<!--=========================  Login signup popups  =========================-->




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




<!--================ Responsive Design for mobile  ===============-->
<div class="side-body">
<p class="latest">Latest News<p>
  <div class="latest-line"></div>
<?php 
            $query = "select * from tbl_images where id!='$id'  order by id asc limit 7 ";
             $result = mysqli_query ($conn, $query);
                if (mysqli_num_rows($result)>0) 
                {
                    while ($row = mysqli_fetch_assoc($result))
                     {
                      $id = $row["id"];
                      $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,14)); //getting fires 19 words from text
                    echo   '<div class="flash">
                      <div class="nimg"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>';
                  echo    '<div class="ncontent">'."<p>".'<span class="heading">'.$head.'</span>'." ".$text.'..<a href="news.php?id='.$id.'">'."<span id='morex'><br/></span>"." Read More".'<i class="fas fa-chevron-circle-right"></i>'.'</a>'.'</p>'.'</div>';
                 echo '</div>'; 
                     }
                }
               else 
               {
                 echo 'No result found';
               }
              ?>
             
       
                 <!--    <div class="nad">
                   <img src="images/ad-demo.jpg" class="nad-img" >
                      </div>  -->
    </div>

   
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
            <p><a href="#">Gre</a></p>  
          </div>


      <div><p class="y">Cutoff</p>
        <div class="linex" id="lz"></div>
        <p><a href="#">IITs </a></p>
        <p><a href="#">NITs</a></p>
        <p><a href="#">IIITs</a></p>
        <p><a href="#">AIIMS</a></p></div>

      <div><p class="y">Links</p>
        <div class="linex" id="la"></div>
        <p><a href="#">Disclaimer</a></p>
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

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<!--==================  TweenMax CDN  ==================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<!--==================  SweetAlert2 CDN  ==================-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<!--==================  SweetAlert CDN  ==================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/rating.js" type="text/javascript"></script>
<script src="js/comment.js" type="text/javascript"></script>

<script>

 /*==================== Functions to get Likes and dislikes =========================*/
function getLikes()
{
  var id = $('html').attr('id'); 
  setInterval(function(){

   $('#x').load('get_likes.php', {id : id});

  },1000);

}

function getDislikes()
{
  var id = $('html').attr('id'); 
  setInterval(function(){

   $('#y').load('get_dislikes.php', {id : id});

  },1000);

}

getDislikes();
getLikes();


 /*==================== Menu toggle =========================*/

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
    TweenMax.to('.active',0.5,{scaleX: 1});
  })


$('#login_nav').click(function()
{
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
})


$('#about_nav').click(function()
{
  TweenMax.to('.active',0.1,{scaleX: 0});  
  $('.cut_nav').css('display','none');
  $('.menu-toggle').css('display','block');
})

}
})

// changing the colour of rating buttons


//getting color of like btn

function get_like_btn_color()
{
  var post_id = $('html').attr('id');

 setInterval(function(){

  $.post('posetive_rating_state.php', {post_id: post_id}, function(data, status){   
 if(data == 1)
 {
  $('.like-btn').addClass('fas');
  $('.dislike-btn').removeClass('fas');
 }
 else if(data == 0)
 {

  $('.like-btn').removeClass('fas');
  $('.like-btn').addClass('far');
 }

});

 },1000);

}

//getting color of dislike btn

function get_dislike_btn_color()
{
  var post_id = $('html').attr('id');

  setInterval(function(){

    $.post('negative_rating_state.php', {post_id: post_id}, function(data, status){   
 if(data == 1)
 {
  $('.dislike-btn').addClass('fas');
  $('.like-btn').removeClass('fas');
 }
 else if(data == 0)
 {
  $('.dislike-btn').removeClass('fas');
  $('.dislike-btn').addClass('far');
 }

});

 },1000);
}

 get_dislike_btn_color();
 get_like_btn_color();


/*==================== Reply button show and hide =========================*/
var action = 1;
function show()
{
  if(action == 1)
  {
    document.getElementByClassName('.popup').style="block";
    action = 0;
  }
  else
  {
    document.getElementByClassName('.popup').style="none";
    action = 1;
  }
}

//hiding and showing the reply textarea
var action = 1;
function show(id)
{

if(action == 1)
{
  document.getElementById(id).style.display = 'block';
  action = 0;
}
else
{
  document.getElementById(id).style.display = 'none';
  action = 1;
}

}

//getting total commnet

function load_number_of_comments()
{

setInterval(function(){

$('#ncmt').load('comment_number.php');

},1000);

}

load_number_of_comments();

</script>


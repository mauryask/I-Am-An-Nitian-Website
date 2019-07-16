<?php
include_once('db/connection.php');
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
            <i class="far fa-thumbs-up" style="cursor:pointer;" name="likes" id="<?php echo $row['id'];  ?>"></i> <span id="x" class="x"></span>
            &nbsp <i class="far fa-thumbs-down" style="cursor:pointer;" name="dislikes"></i> <span  class="x">12</span>
            &nbsp <i class="fas fa-eye" style="cursor:pointer;"></i> <span  class="x"><?php echo $row['views'];  ?></span>
            &nbsp <i class="far fa-comment" style="cursor:pointer;" name="comment"></i> <span  class="x">100</span>
            </p>
        <p class="cmnt">Comments</p>
    </div>
    <div class="txtar"><textarea rows="6" placeholder="Write Your Comments Here..."></textarea><br>
    <button class="btnx">Comment</button>
    </div>
    <div class="comments">
        <div>
                <p style="font-size:15px;font-weight: bold;">Shubham</p>
            <p style="font-size:14px;">Very Nice Article</p>
            <p class="reply" style="cursor:pointer;color:blue;font-size:14px;">Reply <i class="fas fa-reply"></i></p>
        </div>
        <div class="cmt-line"></div>
        <div>
                <p style="font-size:14px;font-weight: bold;">Abhay</p>
                <p style="font-size:14px;">Good</p>
                <p class="reply" style="cursor:pointer;color:blue;font-size:15px;">Reply <i class="fas fa-reply"></i></p>
        </div>
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
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,15)); //getting fires 19 words from text
                    echo   '<div class="flash">
                      <div class="nimg"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>';
                  echo    '<div class="ncontent">'."<p>".'<span class="heading">'.$head.'</span>'." ".$text.'..<a href="news.php?id='.$id.'">'." Read More".'<i class="fas fa-chevron-circle-right"></i>'.'</a>'.'</p>'.'</div>';
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
                      $text = implode(' ',array_slice(explode(' ', $row['text']),0,11)); //getting fires 19 words from text
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
<script   type="text/javascript" src="js/ajax-register.js"></script>
<script   type="text/javascript" src="js/ajax-login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<script>


function loadLikes()
{
  setInterval(function(){
  var idx = $('html').attr('id');
$.ajax({
      url:'db/like_counter.php',
      type:'post',
      data:{id:idx},
      success:function(data)
      {
        $('#x').html(data);
      }

        });
},500);
}

loadLikes();




 $(document).ready(function(){

   //like increment start
      $('.far').click(function(){
      var id= $(this).attr('id');
      var counter =1;
      $.ajax({
      url:'db/like_increment.php',
      type:'post',
      data:{id:id, counter:counter}

        });
    });
     //like increment finish

  });





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
</script>


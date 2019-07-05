<?php
include_once('connection.php');
$id = $_GET['id'];
$query="select * from tbl_images where  id='".$id."'  ";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0)
$row=mysqli_fetch_array($result);
?>

<html>
<head>
<title>I Am An Nitian | News</title>

<link rel="icon" href="images\imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="author" content="Shubham Maurya"> 
<link href="css/news.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/navbar.css" type="text/css" rel="stylesheet">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
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
                <div class="logo">
                <ul>
                <li><a href="index.php"><img src="images\imnitian.png"></a></li>
                <li><a href="index.php" style="font-family: 'Dancing Script', cursive;color:white;font-weight:bold;font-size:13px;letter-spacing: 0.7px;">I AM AN NITIAN</a></li>
                </ul>
                </div>
                <nav class="active">
                <ul>
                <li><a href="index.php" class="homex">Home</a></li>
                <li><a href="team.html" class="homex">Our team</a></li>
                <li><a href="news.html" class="home">News</a></li>
                <li><a href="index.php#about" class="homex">About Us</a></li>
                <li><a class="sub-menu">Exams <i class="fas fa-caret-square-down"></i></a>
                <ul>
                <li><a href="#">Jee</a></li>
                <li><a href="#">Gate</a></li>
                <li><a href="#">Neet</a></li>
                <li><a href="#">Camt</a></li>
                <li><a href="#">Gre</a></li>
                </ul>
                </li>
                <li>
                <button onclick="search()" style="text-transform: uppercase;letter-spacing: 0.8px; font-weight: bold;">Search <i class="fas fa-search"></i></button>
                </li>
                <li><a class="homex" style="cursor:pointer;">User &nbsp<i class="fas fa-user-graduate"></i></a></li>
                </ul>
                </nav>
                
                <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                </div>
                
                
                <!--serach Box-->
                <div class="search-popup" id="searchx" style="display:none;">
                    <input type="text"  placeholder="Search"><button><i class="fas fa-search"></i></button>
                  </div>
                  <!--xxxxx-->
                
                </header>
                

<div class="news-body">
        <div class="news-img">
     <?php
      echo  '<img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/>';
        ?>
        
        </div>
        <div class="news-content">
            <p>
        <span><?php  echo $row['heading'];  ?></span><br>
         <?php echo $row['text']; ?>
        </p>
        <p class="ldc">
            <i class="far fa-thumbs-up" style="cursor:pointer;"></i> <span class="x">55</span>
            &nbsp <i class="far fa-thumbs-down" style="cursor:pointer;"></i> <span  class="x">12</span>
            &nbsp <i class="fas fa-eye" style="cursor:pointer;"></i> <span  class="x">120</span>
            &nbsp <i class="far fa-comment" style="cursor:pointer;"></i> <span  class="x">36</span>
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

        <div class="flash">
            <div class="nimg"> <img src="images/nature srix.jpg"></div>
            <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                    This is an insult to democracy and demands strictest action. 
                     <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
            </p></div>
        </div> 
        
        <div class="flash">
                <div class="nimg"> <img src="images/nature sri.jpg"></div>
                <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                        This is an insult to democracy and demands strictest action. 
                         <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                </p></div>
            </div> 

            <div class="flash">
                    <div class="nimg"> <img src="images/nature srix.jpg"></div>
                    <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                            This is an insult to democracy and demands strictest action. 
                             <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                    </p></div>
                </div>

                <div class="flash">
                        <div class="nimg"> <img src="images/nitsri.jpg"></div>
                        <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                                This is an insult to democracy and demands strictest action. 
                                 <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                        </p></div>
                    </div>

                    <div class="flash">
                            <div class="nimg"> <img src="images/nature sri.jpg"></div>
                            <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                                    This is an insult to democracy and demands strictest action. 
                                     <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                            </p></div>
                        </div>

                        <div class="flash">
                            <div class="nimg"> <img src="images/nature sri.jpg"></div>
                            <div class="ncontent"><p>Hollywood star Leonardo DiCaprio is renowned for his work.
                                    This is an insult to democracy and demands strictest action. 
                                     <a href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                            </p></div>
                        </div>

                      <div class="nad">
                   <img src="images/ad-demo.jpg" class="nad-img" >
                      </div>  
    </div>

    <footer>
 
        <!-- <div class="app" >
             <div><p>Download Our Android App</p>
             <button>Download Now</button></div>
             <div><img src="images/androidx.png" width="80%""> </div>
           </div> --> 
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
   <div class="container">
   <p class="copyright">COPYRIGHT&nbsp<i class="far fa-copyright"></i>
   2019 &nbsp| &nbsp I AM AN NITIAN &nbsp | &nbsp DESIGNED AND DEVELOPED BY SHUBHAM MAURYA &nbsp|&nbsp NIT SRINAGAR</p>
   </div>
   </footer>
</div>

</body>


<script src="js/main.js" type="text/javascript"></script>
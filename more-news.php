<?php 
include_once('connection.php');
 ?>

<html lang="en">
    <head>
        <title>I Am An Nitian | News</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
        <link rel="icon" href="images/imnitian.png"> 
        <link href="css/more-news.css" type="text/css" rel="stylesheet">
        <link href="css/navbar.css" type="text/css" rel="stylesheet">
        <link href="css/back-to-top.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
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

            <header id="f" style="background:rgba(0,0,0,0.9);">
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
                    <li><a href="more-news.php" class="home">News</a></li>
                    <li><a href="index.php#about"  class="homex">About Us</a></li>
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


        <div class="explore"> 

            <?php 
            $query = "select * from tbl_images order by id desc";
            $result = mysqli_query ($conn, $query);
          
                if (mysqli_num_rows($result)>0) 
                {
                    $i=0;
                    while ($row = mysqli_fetch_assoc($result))
                     {
                      $id = $row["id"];
                  if ($i++ % 4 == 0) echo "<div class='expo'>";
          
                ?>
          
          
              <div class="xnnn">
                <?php echo '<div class="zoom"><img alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/></div>'?>
                  
                <?php 
              $head = implode(' ',array_slice(explode(' ', $row['heading']),0,4)); //getting fires 5 words from heading
              $text = implode(' ',array_slice(explode(' ', $row['text']),0,14)); //getting fires 18 words from text
              echo '<p>'.'<span class="heading">'.$head.'</span>'." ".$text.'....<a href="news.php?id='.$id.'">'." Read More".'<i class="fas fa-chevron-circle-right"></i>'.'</a>'.'</p>';
                  ?>   

                </div>  
          
          
          <?php
                      if ($i % 4 == 0) echo "</div>";
              ?>
          
           <?php
                  }
                  if ($i % 4 != 0) echo "</div>";
              } else {
              ?>
              <div>No results found.</div>
              <?php   
              }
             ?>
          
              </div>
              <div class="nad">
  <img src="images/ad-demo.jpg"  class="nad-img">
              </div>

              <footer>
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
</html>

<script type="text/javascript" src="js/main.js"></script>


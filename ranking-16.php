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
include_once('db/connection.php');
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
<link href="css/ranking.css" rel="stylesheet"  type="text/css">
<link href="css/back-to-top.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<style>

</style>
</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
  <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

 <!--================ Scroll Indicator ======================-->
 <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div> 

<div class="wrapper" style="margin-top:1.5rem;">
  

<div class="center">
<p>NITs Ranking <span id="rank_yr" ><span class="break"><br></span>2016</span></p>
<div class="line_rnk" style="width:21rem;"> </div>
</div>



<div class="clg" style="margin-top:1.8rem;">
 <div class="search_clg" >
 <p>Search : </p>
<input type="search" id="search" placeholder="eg. srinagar">
</div>

<table>
<th>Serial No.</th>
<th>NIT Name</th>
<th>Overall Rank</th>
<th>NIT Rank </th>
<tbody id="rank_16">

</tbody>


</table>



<div class="linkx">
<p class="links"> Explore More</p>
<div class="line"></div>
<p><a href="ranking-19.php" class="x" id="click_19">NITs Ranking 2019</a></p>
<p><a href="ranking-18.php" class="x" id="click_18">NITs Ranking 2018</a></p>
<p><a href="ranking-17.php" class="x" id="click_17">NITs Ranking 2017</a></p>
<p><a href="rank-placement-wise.php" class="x" >NITs Ranking Based On Placement</a></p>
</div>
</div>


</div>

<footer class="footer">Copyright <i class="far fa-copyright"></i> 2019 | I Am An Nitian</footer>
</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>


<script>
var id;
$(document).ready(function(){
 id= 4;
  $('#rank_16').load('get_ranking.php', {id : id});
});



 /*==================== Search ranking =========================*/
 $(function()
{ //instead of $(document).ready(function(){}) you ncan use this short hand property
    $('#search').on('keyup',function(){

  var value = $(this).val().trim().toLowerCase();
         $('#rank_16 tr').filter(function(){
             $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
         })
    })
})

</script>


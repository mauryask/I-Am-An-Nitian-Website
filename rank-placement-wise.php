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
<p>NITs Ranking <span id="rank_yr" ><span class="break"><br></span> Based <br>On Placement</p>
<div class="line_rnk" style="width:21rem;"> </div>
</div>


<div class="clg" style="margin-top:1.8rem;">
 <div class="search_clg">
 <p>Search : </p>
<input type="search" id="search" placeholder="eg. srinagar">
</div>

<table>
<th>Serial No.</th>
<th>NIT Name</th>
<th>Avgerage Package</th>
<th>Rank</th>
<tbody id="placement_wise">

<tr>
<td>1</td>
<td>National Institute Of Technology Trichy</td>
<td>6,84,333</td>
<td>4</td>
</tr>

<tr>
<td>2</td>
<td>National Institute Of Technology Rourkela</td>
<td>5,49,333</td>
<td>16</td>
</tr>

<tr>
<td>3</td>
<td>National Institute Of Technology Suratkal</td>
<td>7,13,333</td>
<td>3</td>
</tr>

<tr>
<td>4</td>
<td>National Institute Of Technology Warangal</td>
<td>7,69,833</td>
<td>1</td>
</tr>

<tr>
<td>5</td>
<td>National Institute Of Technology Calicut</td>
<td>6,51,667</td>
<td>5</td>
</tr>

<tr>
<td>6</td>
<td>Visvesvaraya National Institute Of Technology Nagpur</td>
<td>5,48,667</td>
<td>17</td>
</tr>

<tr>
<td>7</td>
<td>National Institute Of Technology Kuruksetra</td>
<td>6,23,333</td>
<td>6</td>
</tr>

<tr>
<td>8</td>
<td>Motilal Nehru National Institute Of Technology Allahabad</td>
<td>7,21,000</td>
<td>2</td>
</tr>

<tr>
<td>9</td>
<td>National Institute Of Technology Durgapur</td>
<td>4,96,667</td>
<td>22</td>
</tr>

<tr>
<td>10</td>
<td>National Institute Of Technology Silchar</td>
<td>4,90,000</td>
<td>24</td>
</tr>

<tr>
<td>11</td>
<td>Malviya National Institute Of Technology Jaipur</td>
<td>5,92,333</td>
<td>8</td>
</tr>

<tr>
<td>12</td>
<td>Sardar Vallabhbhai National Institute Of Technology Surat</td>
<td>6,04,667</td>
<td>7</td>
</tr>

<tr>
<td>13</td>
<td>National Institute Of Technology Hamirpur</td>
<td>5,33,667</td>
<td>18</td>
</tr>

<tr>
<td>14</td>
<td>Maulana Azad National Institute Of Technology Bhopal</td>
<td>5,66,667</td>
<td>11</td>
</tr>

<tr>
<td>15</td>
<td>National Institute Of Technology Meghalaya</td>
<td>4,10,000</td>
<td>28</td>
</tr>

<tr>
<td>16</td>
<td>National Institute Of Technology Agartala</td>
<td>4,69,000</td>
<td>27</td>
</tr>

<tr>
<td>17</td>
<td>National Institute Of Technology Raipur</td>
<td>5,66,667</td>
<td>12</td>
</tr>

<tr>
<td>18</td>
<td>National Institute Of Technology Goa</td>
<td>5,63,333</td>
<td>13</td>
</tr>

<tr>
<td>19</td>
<td>National Institute Of Technology Jalandhar</td>
<td>5,71,667</td>
<td>10</td>
</tr>

<tr>
<td>20</td>
<td>National Institute Of Technology Jamshedpur</td>
<td>5,73,333</td>
<td>9</td>
</tr>

<tr>
<td>21</td>
<td>National Institute Of Technology Patna</td>
<td>5,50,000</td>
<td>15</td>
</tr>

<tr>
<td>22</td>
<td>National Institute Of Technology Manipur</td>
<td>4,71,667</td>
<td>26</td>
</tr>

<tr>
<td>23</td>
<td>National Institute Of Technology Puducherry</td>
<td>4,96,667</td>
<td>23</td>
</tr>

<tr>
<td>24</td>
<td>National Institute Of Technology Nagaland</td>
<td>3,86,667</td>
<td>29</td>
</tr>

<tr>
<td>25</td>
<td>National Institute Of Technology Srinagar</td>
<td>5,57,333</td>
<td>14</td>
</tr>

<tr>
<td>26</td>
<td>National Institute Of Technology Delhi</td>
<td>5,08,667</td>
<td>21</td>
</tr>

<tr>
<td>27</td>
<td>National Institute Of Technology Andhra Pradesh</td>
<td>---</td>
<td>---</td>
</tr>

<tr>
<td>28</td>
<td>National Institute Of Technology Arunachal Pradesh</td>
<td>5,23,667</td>
<td>19</td>
</tr>

<tr>
<td>29</td>
<td>National Institute Of Technology Uttrakhand</td>
<td>4,73,667</td>
<td>25</td>
</tr>

<tr>
<td>30</td>
<td>National Institute Of Technology Sikkim</td>
<td>5,16,667</td>
<td>20</td>
</tr>

<tr>
<td>31</td>
<td>National Institute Of Technology Mizoram</td>
<td>3,83,333</td>
<td>30</td>
</tr>
</tbody>
</table>



<div class="linkx">
<p class="links"> Explore More</p>
<div class="line"></div>
<p><a href="ranking-19.php" class="x" id="click_19">NITs Ranking 2019</a></p>
<p><a href="ranking-18.php" class="x" id="click_18">NITs Ranking 2018</a></p>
<p><a href="ranking-17.php" class="x" id="click_17">NITs Ranking 2017</a></p>
<p><a href="ranking-16.php" class="x" id="click_16">NITs Ranking 2016</a></p>

</div>
</div>


</div>
<footer class="footer" style="font-family:'Playfair Display', serif">Copyright <i class="far fa-copyright"></i> 2019 | I Am An Nitian</footer>
</body>
</html>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

<script>

 /*==================== Search ranking =========================*/
 $(function()
{ //instead of $(document).ready(function(){}) you ncan use this short hand property
    $('#search').on('keyup',function(){

  var value = $(this).val().trim().toLowerCase();
         $('#placement_wise tr').filter(function(){
             $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
         })
    })
})

</script>


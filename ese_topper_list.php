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
<title>I Am An Nitian | ESE-2019 Toppers</title>
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="icon" href="images/imnitian.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" 
crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
<link href="css/back-to-top.css" rel="stylesheet">
<style>

@import url('https://fonts.googleapis.com/css?family=Playfair+Display&display=swap');

    body{
        margin:0;
        padding:0;
        background:rgba(252,252,252,1);
    }

    .wrapper{
        width:100%;
        padding-top:4rem;
    }

    .wrapper .search_clg {
        margin:0 auto;
width:70%;
}

.wrapper .search_clg p{
    font-size:18px;
    font-weight:bold;
    margin:2rem 0 1rem 0;
    font-family: 'Playfair Display', serif;
}

.wrapper .search_clg #search{
    width:17rem;
    padding:0.5rem;
    font-size:15px;
    border-radius:7px;
    border:1px solid rgba(180,180,180,1);
    outline:none;
    letter-spacing: 0.2px;
    font-family: 'Playfair Display', serif;
    margin:0.5rem 0 2rem 0;
}

table{
    width:70%;
    margin:0 auto;
    text-align:center;
    border-collapse:collapse;
    margin-bottom:2rem;
}
table tr{
   border-bottom:1px solid rgba(200,200,200,1);
   margin-top:2rem;
   font-size:16px;
}


table th,table td
{
  font-family:'Playfair Display', serif;
    padding:1rem;
}

th{
    font-size:18px;
    font-family:sans-serif;
}


tr:nth-child(even)
{
background:rgba(247,247,247,1);
}

.intro{
    margin:0 auto;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight:bold;
    letter-spacing:0.5px;
    width:70%;
    font-size:45px;
    color:rgba(37, 116, 169, 1);
    text-align:unset;
    text-transform:capitalize;
}


.footer{
    text-align:center;
    padding:2rem;
}


.next{
    font-size:19px;
    font-family: 'Playfair Display', serif;
    color:#282828;
    text-align:center;
}

#hide{
    line-height:0;
}

.next a{
text-decoration: none;
color:blue;
}

.next a:hover{
    text-decoration:underline;
    color:red;
    }

</style>

</head>

<body onload="loadme()">

 <!--================ Back to top Button ====================-->
 <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>

  <!--================== Preloader ==========================-->
<div id="loader">
</div>


  
<div class="wrapper">
<p class="intro">List of nitians who cracked<br> Engineering Services <br>Exam 2019<p>
<div class="search_clg">
 <p>Search : </p>

<input type="search" id="search" placeholder="Enter Keyword">
</div>



<table>
    <tr >
        <th>Serial</th>
        <th>Name</th>
        <th>NIT </th>
        <th>Branch</th>
        <th>AIR</th>
</tr>
<tbody id="gate_toppers">

<tr>
<td>1</td>
<td>Aman Jain</td>
<td>NIT Warangal</td>
<td>Mechanical</td>
<td>1</td>
</tr>


<tr>
<td>2</td>
<td>Chirag Singla</td>
<td>NIT Jalandhar</td>
<td>Mechanical</td>
<td>2</td>
</tr>


<tr>
<td>3</td>
<td>Kumud Jindal</td>
<td>NIT Hamirpur</td>
<td>Electronics</td>
<td>6</td>
</tr>


<tr>
<td>4</td>
<td>Kartikey Dutta</td>
<td>NIT Durgapur</td>
<td>Electronics</td>
<td>7</td>
</tr>



<tr>
<td>5</td>
<td>Vijay Nandan Pandey</td>
<td>NIT Hamirpur</td>
<td>Civil</td>
<td>8</td>
</tr>


<tr>
<td>6</td>
<td>Souvik Debroy</td>
<td>NIT Agartala</td>
<td>Electrical</td>
<td>9</td>
</tr>

<tr>
<td>7</td>
<td>Pratyush Mishra</td>
<td>NIT Raipur</td>
<td>Mechanical</td>
<td>9</td>
</tr>

<tr>
<td>8</td>
<td>Milan Krishna</td>
<td>NIT Kurukshetra</td>
<td>Electrical</td>
<td>10</td>
</tr>

<tr>
<td>9</td>
<td>Prakash Tiwari</td>
<td>MNIT Jaipur</td>
<td>Electrical</td>
<td>13</td>
</tr>

<tr>
<td>10</td>
<td>Shubham Pachauri</td>
<td>MNIT Bhopal</td>
<td>Mechanical</td>
<td>14</td>
</tr>

<tr>
<td>11</td>
<td>Jayshree Deepak</td>
<td>MNNIT Allahabad</td>
<td>Civil</td>
<td>14</td>
</tr>


<tr>
<td>12</td>
<td>Shubham Tygi</td>
<td>NIT Kurukshetra</td>
<td>Mechanical</td>
<td>15</td>
</tr>



<td>14</td>
<td>Saurabh Goyal</td>
<td>MNNIT Allahabad</td>
<td>Electrical</td>
<td>15</td>
</tr>

<tr>
<td>15</td>
<td>Shashank Shekhar</td>
<td>NIT Jamshedpur</td>
<td>Civil</td>
<td>15</td>
</tr>


<tr>
<td>16</td>
<td>Shubham Pachori</td>
<td>MANIT Bhopal</td>
<td>Mechanical</td>
<td>21</td>
</tr>

<tr>
<td>17</td>
<td>Deepak Singh</td>
<td>MNNIT Allhabad</td>
<td>Electrical</td>
<td>17</td>
</tr>


<tr>
<td>18</td>
<td>Arjun Ram</td>
<td>MNNIT Allhabad</td>
<td>Electrical</td>
<td>23</td>
</tr>

<tr>
<td>19</td>
<td>Akshay Shram</td>
<td>NIT Raipur</td>
<td>Electronics</td>
<td>23</td>
</tr>

<tr>
<td>20</td>
<td>Pushpendra</td>
<td>MNNIT Allhabad</td>
<td>Electrical</td>
<td>27</td>
</tr>

<tr>
<td>21</td>
<td>Ravi Summy Kumar</td>
<td>NIT Jamshedpur</td>
<td>Civil</td>
<td>28</td>
</tr>


<tr>
<td>22</td>
<td>Poonam Ahlawat</td>
<td>NIT Kurukshetra</td>
<td>Electrical</td>
<td>31</td>
</tr>


<tr>
<td>23</td>
<td>Vishnu Kumar Maurya</td>
<td>NIT Jalandhar</td>
<td>Civil</td>
<td>32</td>
</tr>

<tr>
<td>24</td>
<td>Bhanu Richhariya</td>
<td>NIT Mizoram</td>
<td>Electronics</td>
<td>34</td>
</tr>


<tr>
<td>25</td>
<td>Ankit Tayal </td>
<td>NIT Warangal</td>
<td>Electrical</td>
<td>36</td>
</tr>

<tr>
<td>26</td>
<td>Prabhat Pandey </td>
<td>NIT Warangal</td>
<td>Electronics</td>
<td>46</td>
</tr>

<tr>
<td>27</td>
<td>Mahesh Vishnoi</td>
<td>NIT Srinagar</td>
<td>Electrical</td>
<td>46</td>
</tr>


<tr>
<td>28</td>
<td>Rishabh Trivedi</td>
<td>MNNIT Allahabad</td>
<td>Electrical</td>
<td>48</td>
</tr>


<tr>
<td>29</td>
<td>Danish Agarwal</td>
<td>MNIT Jaipur</td>
<td>Electronics</td>
<td>48</td>
</tr>

<tr>
<td>30</td>
<td>Brijesh Singh Stayal</td>
<td>NIT Silchar</td>
<td>Civil</td>
<td>54</td>
</tr>


<tr>
<td>31</td>
<td>Kunal Saurav</td>
<td>NIT Uttrakhand</td>
<td>Electrical</td>
<td>54</td>
</tr>

<tr>
<td>32</td>
<td>Chetan Kumavat</td>
<td>NIT Jalandhar</td>
<td>Civil</td>
<td>56</td>
</tr>

<tr>
<td>33</td>
<td>Vikram Garg</td>
<td>NIT Jalandhar</td>
<td>Civil</td>
<td>60</td>
</tr>


<tr>
<td>34</td>
<td>Kishore Kalita</td>
<td>NIT Silchar</td>
<td>Electrical</td>
<td>61</td>
</tr>

<tr>
<td>35</td>
<td>Madhukant Goyal</td>
<td>NIT Jamshedpur</td>
<td>Civil</td>
<td>62</td>
</tr>

<tr>
<td>36</td>
<td>Ankit Khasa</td>
<td>NIT Kurukshetra</td>
<td>Electrical</td>
<td>63</td>
</tr>

<tr>
<td>37</td>
<td>Rishabh Vijay</td>
<td>NIT Jalandhar</td>
<td>Civil</td>
<td>73</td>
</tr>

<tr>
<td>38</td>
<td>Himanshu Singh</td>
<td>NIT Jalandhar</td>
<td>Mechanical</td>
<td>76</td>
</tr>

<tr>
<td>39</td>
<td>Rachit Jain</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>25</td>
</tr>

<tr>
<td>40</td>
<td>Sonbha Chaudhary</td>
<td>NIT Kurukshetra</td>
<td>Electrical</td>
<td>82</td>
</tr>

<tr>
<td>41</td>
<td>Chetan Prakash Meena</td>
<td>NIT Raipur</td>
<td>Electrical</td>
<td>87</td>
</tr>


<tr>
<td>42</td>
<td>Nizam Barbhuiya</td>
<td>NIT Silchar</td>
<td>Mechanical</td>
<td>88</td>
</tr>

<tr>
<td>43</td>
<td>Amit Kumar</td>
<td>NIT Patna</td>
<td>Electrical</td>
<td>90</td>
</tr>


<tr>
<td>44</td>
<td>Aman Kumar</td>
<td>NIT Raipur</td>
<td>Mechanical</td>
<td>94</td>
</tr>

<tr>
<td>45</td>
<td>Prashant Parihar</td>
<td>NIT Warangal</td>
<td>electrical</td>
<td>99</td>
</tr>

<tr>
<td>46</td>
<td>Aman Harlalka</td>
<td>NIT Silchar</td>
<td>Civil</td>
<td>106</td>
</tr>

<tr>
<td>47</td>
<td>Jashram Meena</td>
<td>MANIT Bhopal</td>
<td>Mechanical</td>
<td>119</td>
</tr>


<tr>
<td>48</td>
<td>Vinod Kumar Gaomti</td>
<td>NIT Jamshedpur</td>
<td>Mechanical</td>
<td>127</td>
</tr>

<tr>
<td>49</td>
<td>Sumit Katoch</td>
<td>MNNIT Allahabad</td>
<td>Mechanical</td>
<td>128</td>
</tr>



<tr>
<td>50</td>
<td>Champakjyoti Rajbangshi</td>
<td>NIT Silchar</td>
<td>Civil</td>
<td>135</td>
</tr>

<tr>
<td>51</td>
<td>Alok Kumar</td>
<td>NIT Jalandhar</td>
<td>Civil</td>
<td>159</td>
</tr>


</tbody>

</table>

<p class="next" id="lnk" style="margin-top:5rem;"> List of nitians who did splendid performence in Gate 2019 <span id="hide"><br></span><a href="gate_topper_list.php">Click Here</a></p>

<p class="footer">Copyright <i class="far fa-copyright"></i> 2019 | I Am An Nitian</p>
</div>
</body>

</html>

<!--===============  Microsoft's JQuery CDN =================-->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<!--==================  Local Js Files  ==================-->
<script   type="text/javascript" src="js/main.js"></script>

<script>

 /*==================== Search ranking =========================*/
 $(function()
{ //instead of $(document).ready(function(){}) you ncan use this short hand property
    $('#search').on('keyup',function(){

  var value = $(this).val().trim().toLowerCase();
         $('#gate_toppers tr').filter(function(){
             $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
         })
    })
})

</script>
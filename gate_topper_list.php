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
<title>I Am An Nitian | GATE-2019 Toppers</title>
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

  <!--================== Preloader ==========================-->
<div id="loader">
</div>

 <!--================ Back to top Button ====================-->
 <button id="back-to-top" ><i class="fas fa-angle-double-up"></i></button>
  
<div class="wrapper">
<p class="intro">List of nitians who did <br>splendid  performence in <br>Gate 2019<p>
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
<td>Ritesh Lalwani</td>
<td>MANIT Bhopal</td>
<td>EE</td>
<td>1</td>
</tr>


<tr>
<td>2</td>
<td>Rajat Soni</td>
<td>NIT Waranagal</td>
<td>ECE</td>
<td>1</td>
</tr>


<tr>
<td>3</td>
<td>Dilpreet Dhanjal</td>
<td>NIT Raipur</td>
<td>MT</td>
<td>1</td>
</tr>

<tr>
<td>4</td>
<td>Vaibhav Singh Rajput</td>
<td>NIT Andhra Pradesh</td>
<td>MT</td>
<td>1</td>
</tr>

<tr>
<td>5</td>
<td>Dhruv Kumar Chaurasiya </td>
<td>NIT Jalandhar</td>
<td>BE</td>
<td>2</td>
</tr>


<tr>
<td>6</td>
<td>Manoj Kumar</td>
<td>MNNIT Allahabad</td>
<td>CH</td>
<td>2</td>
</tr>

<tr>
<td>7</td>
<td>OM Prakash Sahu</td>
<td>NIT Raipur</td>
<td>MI</td>
<td>3</td>
</tr>

<tr>
<td>8</td>
<td>Pramjeet Kumar Dubey</td>
<td>NIT Patna</td>
<td>CE</td>
<td>3</td>
</tr>

<tr>
<td>9</td>
<td>Shubham Mauray</td>
<td>NIT Patna</td>
<td>ECE</td>
<td>3</td>
</tr>

<tr>
<td>10</td>
<td>Ankit Kulhari</td>
<td>SVNIT Surat</td>
<td>ME</td>
<td>3</td>
</tr>

<tr>
<td>11</td>
<td>Mayank Dixit</td>
<td>MNIT japur</td>
<td>CH</td>
<td>4</td>
</tr>


<tr>
<td>12</td>
<td>Charan Singh</td>
<td>NIT Srinagar</td>
<td>MT</td>
<td>4</td>
</tr>


<tr>
<td>13</td>
<td>Siddhartha Wadha</td>
<td>NIT Kurukshetra</td>
<td>ME</td>
<td>4</td>
</tr>
<tr>

<td>14</td>
<td>Devashish Sen</td>
<td>MNNIT Allahabadr</td>
<td>BE</td>
<td>4</td>
</tr>

<tr>
<td>15</td>
<td>Charmin Patel</td>
<td>SVNIT Surat</td>
<td>ME</td>
<td>5</td>
</tr>


<tr>
<td>16</td>
<td>Sayantan Bhattacharya</td>
<td>NIT Agartala</td>
<td>EE</td>
<td>5</td>
</tr>

<tr>
<td>17</td>
<td>Pradeep Kumar Verma</td>
<td>NIT Patna</td>
<td>EE</td>
<td>5</td>
</tr>


<tr>
<td>18</td>
<td>Deepika Kumari</td>
<td>MNIT Jaipur</td>
<td>EE</td>
<td>7</td>
</tr>


<tr>
<td>19</td>
<td>Deepita Roy</td>
<td>MNIT Jaipur</td>
<td>EE</td>
<td>7</td>
</tr>

<tr>
<td>20</td>
<td>Ankit Kumar</td>
<td>NIT Durgapur</td>
<td>ECE</td>
<td>7</td>
</tr>

<tr>
<td>21</td>
<td>Prgati Golcha</td>
<td>NIT Raipur</td>
<td>AE</td>
<td>8</td>
</tr>


<tr>
<td>22</td>
<td>Anubhav Singh</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>8</td>
</tr>


<tr>
<td>23</td>
<td>Saurabh Kumar</td>
<td>NIT Trichy</td>
<td>CE</td>
<td>11</td>
</tr>

<tr>
<td>24</td>
<td>Shubham Kumar</td>
<td>NIT Jamshedpur</td>
<td>MT</td>
<td>11</td>
</tr>


<tr>
<td>25</td>
<td>Saurabh Belgaonkar</td>
<td>NIT Warangal</td>
<td>ME</td>
<td>12</td>
</tr>

<tr>
<td>26</td>
<td>Pradhuman Jetha</td>
<td>NIT Jalandhar</td>
<td>BE</td>
<td>13</td>
</tr>

<tr>
<td>27</td>
<td>Prince Pratap Teza</td>
<td>MANIT Bhopal</td>
<td>MME</td>
<td>15</td>
</tr>


<tr>
<td>28</td>
<td>Ravi Teja</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>16</td>
</tr>


<tr>
<td>29</td>
<td>Akhil Daruru</td>
<td>SVNIT Surat</td>
<td>ME</td>
<td>16</td>
</tr>

<tr>
<td>30</td>
<td>Kishor Kashyap</td>
<td>NIT Warangal</td>
<td>ME</td>
<td>16</td>
</tr>


<tr>
<td>31</td>
<td>Tanamy Rastogi</td>
<td>MNNIT Allahabad</td>
<td>EE</td>
<td>17</td>
</tr>

<tr>
<td>32</td>
<td>Kishor Mandal</td>
<td>NIT Raipur</td>
<td>MT</td>
<td>17</td>
</tr>

<tr>
<td>33</td>
<td>Yash Jain</td>
<td>NIT Raipur</td>
<td>CH</td>
<td>19</td>
</tr>


<tr>
<td>34</td>
<td>Avinash Kumar</td>
<td>NIT Jamshedpur</td>
<td>MT</td>
<td>20</td>
</tr>

<tr>
<td>35</td>
<td>Aashendra Patodi</td>
<td>MNIT Jaipur</td>
<td>MT</td>
<td>20</td>
</tr>

<tr>
<td>36</td>
<td>Abhishek Kumar Sinha</td>
<td>NIT Patna</td>
<td>ME</td>
<td>23</td>
</tr>

<tr>
<td>37</td>
<td>Sai Ganesh</td>
<td>NIT Warngal</td>
<td>ME</td>
<td>23</td>
</tr>

<tr>
<td>38</td>
<td>Rajat Anand</td>
<td>NIT Raipur</td>
<td>BT</td>
<td>23</td>
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
<td>Sai Vinay</td>
<td>NIT Warngal</td>
<td>CH</td>
<td>25</td>
</tr>

<tr>
<td>41</td>
<td>S Pawan Kumar</td>
<td>NIT Sikkim</td>
<td>BE</td>
<td>26</td>
</tr>

<tr>
<td>42</td>
<td>Kangkan Gohain</td>
<td>NIT Silchar</td>
<td>ME</td>
<td>26</td>
</tr>

<tr>
<td>43</td>
<td>Arnob Samui</td>
<td>NIT Raipur</td>
<td>MT</td>
<td>29</td>
</tr>

<tr>
<td>44</td>
<td>Abhishek Mishra</td>
<td>NIT Warngal</td>
<td>CH</td>
<td>29</td>
</tr>


<tr>
<td>45</td>
<td>Abhijath</td>
<td>NIT Andhra Pradesh</td>
<td>CSE</td>
<td>29</td>
</tr>

<tr>
<td>46</td>
<td>Swapnil Agarwal</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>29</td>
</tr>

<tr>
<td>47</td>
<td>Ashif Khan</td>
<td>NIT Jalandhar</td>
<td>IN</td>
<td>31</td>
</tr>

<tr>
<td>48</td>
<td>Amit Kumar</td>
<td>NIT Patna</td>
<td>AE</td>
<td>33</td>
</tr>


<tr>
<td>49</td>
<td>Simant Saurabh</td>
<td>NIT Patna</td>
<td>CE</td>
<td>37</td>
</tr>

<tr>
<td>50</td>
<td>Sunil Sunda</td>
<td>SVNIT Surat</td>
<td>CH</td>
<td>37</td>
</tr>

<tr>
<td>51</td>
<td>Rishikesh Vaishnav</td>
<td>MNIT Jaipur</td>
<td>ME</td>
<td>38</td>
</tr>

<tr>
<td>52</td>
<td>Rohan Deb</td>
<td>NIT Silchar</td>
<td>CS</td>
<td>52</td>
</tr>

<tr>
<td>53</td>
<td>Munish Sharma</td>
<td>NIT Srinagar</td>
<td>ME</td>
<td>52</td>
</tr>

<tr>
<td>54</td>
<td>Brijesh Yadav</td>
<td>NIT Patna</td>
<td>EE</td>
<td>53</td>
</tr>

<tr>
<td>55</td>
<td>Surbhi Shrma</td>
<td>NIT Jalandhar</td>
<td>CH</td>
<td>59</td>
</tr>

<tr>
<td>56</td>
<td>Ankur Agarwal</td>
<td>NIT Raipur</td>
<td>ME</td>
<td>65</td>
</tr>


<tr>
<td>57</td>
<td>Hiritik Mittal</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>56</td>
</tr>

<tr>
<td>58</td>
<td>Rahul Kumar Pandey</td>
<td>NIT Jamshedpur</td>
<td>ME</td>
<td>58</td>
</tr>
<tr>
<td>59</td>
<td>Amir Suhail</td>
<td>NIT Jalandhar</td>
<td>IN</td>
<td>59</td>
</tr>

<tr>
<td>60</td>
<td>Nitesh Modanwal</td>
<td>NIT Patna</td>
<td>ECE</td>
<td>62</td>
</tr>


<tr>
<td>61</td>
<td>Prashant Kumar</td>
<td>NIT Jamshedpur</td>
<td>MT</td>
<td>64</td>
</tr>


<tr>
<td>62</td>
<td>Shubham</td>
<td>NIT Patna</td>
<td>AE</td>
<td>66</td>
</tr>


<tr>
<td>63</td>
<td>Ayush Tripathi</td>
<td>NIT Raipur</td>
<td>EE</td>
<td>72</td>
</tr>


<tr>
<td>64</td>
<td>Praveen Subramanian</td>
<td>NIT Silchar</td>
<td>IN</td>
<td>79</td>
</tr>


<tr>
<td>65</td>
<td>Shivam Singh</td>
<td>NIT Patna</td>
<td>CE</td>
<td>80</td>
</tr>

<tr>
<td>66</td>
<td>Phalguni Raghuvanshi</td>
<td>NIT Patna</td>
<td>Archi</td>
<td>83</td>
</tr>

<tr>
<td>67</td>
<td>Safal Sharma</td>
<td>MANIT Bhopal</td>
<td>MT</td>
<td>80</td>
</tr>

<tr>
<td>68</td>
<td>Ankit Pal</td>
<td>MANIT Bhopal</td>
<td>CH</td>
<td>87</td>
</tr>

<tr>
<td>69</td>
<td>Rupesh Kumar Singh</td>
<td>NIT Patna</td>
<td>EE</td>
<td>90</td>
</tr>


<tr>
<td>70</td>
<td>Manish Bollineni</td>
<td>NIT Warangal</td>
<td>MT</td>
<td>94</td>
</tr>


<tr>
<td>71</td>
<td>Gaurav Bhal</td>
<td>NIT Srinagar</td>
<td>Math</td>
<td>94</td>
</tr>



<tr>
<td>72</td>
<td>Ankit Singh</td>
<td>NIT Jamshedpur</td>
<td>ME</td>
<td>96</td>
</tr>

<tr>
<td>73</td>
<td>Sasank</td>
<td>NIT Andhra Pradesh</td>
<td>CSE</td>
<td>98</td>
</tr>

<tr>
<td>74</td>
<td>Abhishek Kumar Shrarma</td>
<td>MNNIT Allahabad</td>
<td>EE</td>
<td>103</td>
</tr>

<tr>
<td>75</td>
<td>Aditya Upadhyay</td>
<td>MANIT Bhopal</td>
<td>CE</td>
<td>106</td>
</tr>


<tr>
<td>76</td>
<td>Tushar Vasta</td>
<td>NIT Silchar</td>
<td>IN</td>
<td>107</td>
</tr>

<tr>
<td>77</td>
<td>Kanchan Kumar</td>
<td>NIT Patna</td>
<td>EE</td>
<td>112</td>
</tr>

<tr>
<td>78</td>
<td>Rahul Kumar</td>
<td>NIT Jamshedpur</td>
<td>EE</td>
<td>112</td>
</tr>

<tr>
<td>79</td>
<td>MD. Irfan Khan</td>
<td>NIT Jamshedpur</td>
<td>MT</td>
<td>112</td>
</tr>

<tr>
<td>80</td>
<td>Anand Rai</td>
<td>NIT Patna</td>
<td>ECE</td>
<td>113</td>
</tr>

<tr>
<td>81</td>
<td>Vishal Sharma</td>
<td>NIT Silchar</td>
<td>ME</td>
<td>126</td>
</tr>

<tr>
<td>82</td>
<td>Debottam Datta</td>
<td>NIT Silchar</td>
<td>ECE</td>
<td>128</td>
</tr>

<tr>
<td>83</td>
<td>Aditya Bharadwaj</td>
<td>NIT Andhra Pradesh</td>
<td>MT</td>
<td>140</td>
</tr>

<tr>
<td>84</td>
<td>Pankaj Sharma</td>
<td>MNNIT Allahabad</td>
<td>EE</td>
<td>140</td>
</tr>

<tr>
<td>85</td>
<td>Ram Charan Chaudhary</td>
<td>MANIT Bhopal</td>
<td>ME</td>
<td>151</td>
</tr>

<tr>
<td>86</td>
<td>Fayez Ahmad</td>
<td>NIT Silchar</td>
<td>ME</td>
<td>168</td>
</tr>

<tr>
<td>87</td>
<td>Uditya Bayan</td>
<td>NIT Silchar</td>
<td>IN</td>
<td>171</td>
</tr>

<tr>
<td>88</td>
<td>Shivam Kumar</td>
<td>MANIT Bhopal</td>
<td>CS</td>
<td>175</td>
</tr>

<tr>
<td>89</td>
<td>Ashif Raja</td>
<td>NIT Jamshedpur</td>
<td>CE</td>
<td>185</td>
</tr>

<tr>
<td>90</td>
<td>Roshni</td>
<td>NIT Andhra Pradesh</td>
<td>BE</td>
<td>189</td>
</tr>


<tr>
<td>91</td>
<td>Arshad Khan</td>
<td>NIT Warangal</td>
<td>CE</td>
<td>193</td>
</tr>

<tr>
<td>92</td>
<td>Manish Kumar</td>
<td>MANIT Bhopal</td>
<td>AE</td>
<td>197</td>
</tr>

<tr>
<td>93</td>
<td>Piyush Kumar</td>
<td>NIT Patna</td>
<td>CE</td>
<td>200</td>
</tr>

<tr>
<td>94</td>
<td>Divyajyoti Chkraborty</td>
<td>NIT Jamshedpur</td>
<td>ME</td>
<td>226</td>
</tr>

<tr>
<td>95</td>
<td>Mayank Chittora</td>
<td>MNIT Jaipur</td>
<td>EE</td>
<td>230</td>
</tr>


<tr>
<td>96</td>
<td>Deepak Gupta</td>
<td>MNNIT Allahabad</td>
<td>EE</td>
<td>230</td>
</tr>

<tr>
<td>97</td>
<td>Himanshu Mishra</td>
<td>NIT Patna</td>
<td>EE</td>
<td>276</td>
</tr>

<tr>
<td>98</td>
<td>Mayank Sharma</td>
<td>MNIT Jaipur</td>
<td>EE</td>
<td>291</td>
</tr>

<tr>
<td>99</td>
<td>Sarvesh Manju Pandey</td>
<td>MANIT Jaipur</td>
<td>ME</td>
<td>294</td>
</tr>


</tbody>

</table>
<p class="next" id="lnk" style="margin-top:5rem;"> List of nitians who cracked Engineering Services Exam 2019 <a href="ese_topper_list.php"><span id="hide"><br></span>Click Here</a></p>

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
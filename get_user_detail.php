<?php
include_once('connection.php');
session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
    exit("<div style='
    top:50%; 
    left:50%; 
    transform:translate(-50%,-50%);
    position:absolute;
    display:flex;
    flex-direction:column;
    align-items:center;
    '>
    <img src='images/access.png' width='200px' height='200px'>
    <p style='
  
    font-size:35px;
  text-align:center;
  font-weight:bold;
    '
    >Access Denied Page 404 Not Found<p>
    </div>");
}
$query="select * from user where id=1";
$result=mysqli_query($conn,$query);
?>
<html>
<head>
<style>
body{
    background:rgba(250,250,250,1);
}
table{
    border-collapse:collapse;
    border:1px solid;
    width:80%;
    margin:0 auto;
    margin-top:2rem;
}
tr,th,td{
    border:1px solid;
    text-align:center;
}
th,td{
    padding:7px;
}
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>College</th>
<th>State</th>
<tr>
<tbody>
<?php
while($row=mysqli_fetch_assoc($result))
{

    echo '<tr><td>'.$row['name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo '<td>'.$row['clg'].'</td>';
    echo '<td>'.$row['state'].'</td></tr>';

}
?>
</tbody>
</table>
</body>
</html>
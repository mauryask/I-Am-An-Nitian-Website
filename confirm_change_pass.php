<?php
include_once('connection.php');
session_start();
$id = $_SESSION['user_idx'];
$id=(int)preg_replace('/(^[\"\']|[\"\']$)/', '', $id); 
//here we are getting string with single qoutes
// so remove quotes and then convert it to int
$query =  "select * from user where id = {$id}";
$result = mysqli_query($conn, $query);

if($result)
{
    $pass = crypt(sha1(md5(mysqli_real_escape_string($conn,$_POST['pass']))),'imn');
   $query_x = "update user set pswd = '".$pass."' where id= {$id}";
    if(mysqli_query($conn, $query_x))
    {
        echo 1;
        exit;
    }
    else
    {
        echo 0;
        exit;
    }
}
else
{
    echo 0;
    exit;
}

?>
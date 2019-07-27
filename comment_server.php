<?php
include_once('connection.php');
session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])
 && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2)    
{
      $user_id = $_SESSION['user_id'];
      $post_id = $_POST['post_id'];
      $comment = addslashes($_POST['comment']);
      $user_name = $_SESSION['user_name'];



/*===================  Getting time and date ====================*/
//getting IST
date_default_timezone_set('Asia/Kolkata');

//date
$date = date('d');

//month
$months = array("jan", "feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct","Nov", "Dec");
$month =$months[(int)date('m')-1];


//time
$hrs = (int)date('H');
if($hrs>12)
{
    $hrs= $hrs-12;
    if($hrs<10)
    {
        $hrs = "0".$hrs;
    }
    
}
else
{
    $hrs="0".$hrs;
}

$time =$hrs.date(':i A');

$full_time = $month." ".$date.", ".$time;


    
     $query = "insert into comment (user_id, post_id, comment, user_name, commented_at)
      values('$user_id', '$post_id', '$comment', '$user_name','$full_time')";
      $result = mysqli_query($conn, $query);
if($result)
{
    echo  'successfully inserted';
}    

}
else if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) 
&& isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) //prevent in admin from liking the new
{
 echo 1;
}
else
{
    echo 2; //if user is not logged in or admin
}
?>
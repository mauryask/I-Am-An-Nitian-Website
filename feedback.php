<?php

include_once('connection.php');

if(ctype_alpha(str_replace(' ', '', $_POST['user_name'])) === false)  
    {
        echo -1; 
        exit;
    }
    else
    {
        $name = $_POST['user_name'];
    }

  if(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL))
  {
      echo -2; // if email invalid
      exit;
  }
  else
  {
      $email =  $_POST['user_email'];
  }

  $feedback = $_POST['user_feedback']; // getting feedback


/*===================  Getting time and date ====================*/
//getting IST
date_default_timezone_set('Asia/Kolkata');

//date
$date = date('d');

//month
$months = array("jan", "feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct","Nov", "Dec");
$month =$months[(int)date('m')-1];

//year
$year = date('Y');

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
$state=0;
$full_time = $month." ".$date.", ".$year.", ".$time;
$query = "insert into feedback (user_name, user_email, user_feedback, fedback_at, state)
 values('$name', '$email', '$feedback', '$full_time', '$state')";
$result = mysqli_query($conn, $query);

if($result)
{
    echo 1;
}
else
{
    echo 2;
}


?>
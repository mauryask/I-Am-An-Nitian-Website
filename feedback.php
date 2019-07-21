<?php

include_once('connection.php');

 /*=================  user name validation  ====================*/

if(ctype_alpha(str_replace(' ', '', $_POST['user_name'])) === false)  
    {
        echo -1; // if name invalid
        exit;
    }
    else
    {
        $name = $_POST['user_name'];
    }

 /*=================  email validation  ====================*/
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

$query = "insert into feedback (user_name, user_email, user_feedback) values('$name', '$email', '$feedback')";
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
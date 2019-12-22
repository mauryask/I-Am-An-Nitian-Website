<?php
include_once('connection.php');

    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
       echo 0;	
       exit;
    }
    else
    {
     $query ="select * from user where email = '".$_POST['email']."' ";
     $result = mysqli_query($conn,$query);
     if($row = mysqli_fetch_array($result))
     {
        
       $to = $_POST['email'];
       $subject = 'Reset Your Password';
       $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
       $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
       $headers .= "MIME-Version: 1.0\r\n";
       $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
       
       $message = '<html>
       <head>
       <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
       </head>
       <body>';
       $message .= '<div style="display:flex;
       flex-direction:row;
       "><img src="http://www.iamannitian.co.in/images/imnitian.png" width="40px" height="40px"/>
       <span style="font-family:'.'Dancing Script'.', cursive;
       font-weight:bold;
       font-size:17px;
       color:red;
       margin-left:7px;
       margin-top:10px;
       ">I Am An Nitian</span>
       </div>';

       $id = $row['id'];
        $name = explode(" ",$row['name']); 
        $name = $name[0]; 
       $url = "http://localhost/Unknown-Things/change_password.php?userxplftnsp='".$id."'";
       $message .= '<p style="margin-left:12px;">Hi ! '.$name.'</p>';
       $message .= '<p style="margin-left:12px;margin-bottom:25px;">We got a request to reset your password.</p>';
       $message .= '<a style="text-align:center;background:#4acf4a;width:15rem;
             text-decoration:none;color:white;margin-left:10px;padding:8px 12px 8px 12px;"
              href="'.$url.'">Reset Password</a>';
       $message .= '<p style="margin-left:12px;margin-bottom:25px;margin-top:25px;">If you ignore this message your
              password won\'t be changed.</p>';
       $message .= '<div style="width:10rem;height:2px;background:#4caf50;margin-left:12px;"></div>';
       $message .= '<p style="margin-left:12px;"><i>This is a system
        genrated email. Please do not reply.</i></p>';
       $message .= "</body></html>";
      $rslt =  mail($to, $subject, $message, $headers);
      if($rslt)
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
    }

?>
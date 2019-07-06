<?php

include_once('connection.php'); //including the database connectivity file
session_start();        //starting session
$_SESSION['name']='';   // creating a seesion variable

if(isset($_POST['name']))
{ //checking whether name fieled exits or not

/*==========  Checking whether fields are empty  ===========*/
  if(empty($_POST['name']) || empty($_POST['user_email']) || empty($_POST['phone']) || empty($_POST['clg']) || empty($_POST['state']) || empty($_POST['user_pass']))
  {
     echo 'all fields are required';
     exit;
  }
else
{ // if not empty then go further
/*=================  name validation  ====================*/
  if(ctype_alpha(str_replace(' ', '', $_POST['name'])) === false)
    {
        echo "use only letters & white spaces in name field";
        exit;
    }
    else
    {
        $name = test_input( $_POST['name']);
    }

  /*=================  email validation  ====================*/
  if(!filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL))
    {
        echo "invalid email";
        exit;
    }
    else
    {
        $email = test_input( $_POST['user_email']);
    }

    /*=================  phone number validation  ====================*/
    if(!preg_match('/^[0-9]{10}+$/', $_POST['phone']))
    {
        echo "invalid phone number";
        exit;
    }
    else
    {
        $phone = test_input( $_POST['phone']);
    }

    /*================= college name validation  ====================*/
    if(ctype_alpha(str_replace(' ', '', $_POST['clg'])) === false)
    {
        echo "invalid college name";
        exit;
    }
    else
    {
        $clg = test_input( $_POST['clg']);
        if($clg == trim('Select College'))
        {
            echo 'please select college';
            exit;
        }
    }
        
    /*================= state name validation  ====================*/
    if(ctype_alpha(str_replace(' ', '', $_POST['state'])) === false)
    {
        echo "invalid state name";
        exit;
    }
    else
    {
        $state = test_input( $_POST['state']);
        if($state == trim('Select Your State'))
        {
            echo 'please select your state';
            exit;
        }
    }

    /*=================  password tripple layer encryption  ==================*/ 
    $pass = crypt(sha1(md5(test_input($_POST['user_pass']))),'imn'); 
    $cnf_pass = crypt(sha1(md5(test_input($_POST['cnf_pass']))),'imn'); 


    /*=================  Checking if both passwords are same  ==================*/
    if($pass != $cnf_pass)
    {
       echo 'password did not match';
       exit;
    }
    else
    { //if same then go further
      /*=================  Check whether user alreday exists  ==================*/ 
     $check_q ="select * from user where email='".$email."' ";
     $rslt= mysqli_query($conn, $check_q);
    if(mysqli_num_rows($rslt)>0)
    {
        echo 'user already exists';
        exit;
    }
else{  //if new user then insert data into database
   $user_type=2;
   $query = "INSERT INTO user (name, email, phone, clg, state, pswd,user_type)
   VALUES ('$name','$email', '$phone', '$clg', '$state', '$pass','$user_type')";
   
    if ($conn->query($query) === TRUE) 
    {
      $sql = "select * from user where email='".$email."' and pswd='".$pass."'  ";
      $result=mysqli_query($conn,$sql);

      if($row = mysqli_fetch_array($result))
      {
        $name=explode(" ",$row['name']);
        $_SESSION['name']=$name[0];
        echo 1;
      }
      else
      {
        echo 'registration failed';
        exit;
      }
    }
    else
    {
        echo 'registration failed';
        exit;
    }
} // new user insert data
} // password match
} // not empty
} // if name field exits
else 
{  // if name field does not exits then you can't go to the welcome.php
    header('location: index.php');
}

 /*===== extra security layer (protection from spamers and hackers) =======*/
function test_input($data)
{
    $data=trim($data);  //removing white spaces
    $data=stripslashes($data);  // removing back slashes
    $data=htmlspecialchars($data); //converting symbols to html elements
    return $data;
}

?>
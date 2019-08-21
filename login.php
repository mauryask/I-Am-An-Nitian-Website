<?php
 include_once('connection.php');
 session_start();
if(isset($_POST['email']))
{
if(empty($_POST['email']) || empty($_POST['pass']))
{
  echo 'please fill out the credentials';
  exit;
}
 else
 {
  $email =mysqli_real_escape_string($conn,$_POST['email']);
 
  if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
       echo 'invalid email or password';	
        exit;
    }
    else
    {

      if($_POST['check']==1)
      {
      $pass = crypt(sha1(md5(mysqli_real_escape_string($conn,$_POST['pass']))), 'imn'); //password tripple layer encryption
      $query="select * from user where email='".$email."' and pswd='".$pass."'  ";
      }
      else
      {
        $pass = sha1(md5(mysqli_real_escape_string($conn,$_POST['pass']))); //password tripple layer encryption 
      $query="select * from admin where email='".$email."' and pswd='".$pass."'  ";
      }
      
      $result=mysqli_query($conn,$query);  
    
      if($row = mysqli_fetch_array($result))
      {
        $name = explode(" ",$row['name']); 
        $name = $name[0]; 
    
        $_SESSION['user_name'] = $name; // this variable is for displying the name at comment section
    
        $name = (strlen($name)>7) ? substr($name,0,7) : $name;  //only 7 characters are allowed in name fieled
        $_SESSION['name']=$name;
        $_SESSION['user_id']=$row['id']; //getting user id
        $_SESSION['user_type'] = $row['user_type'];
        echo 1;
      }
      else
      {
        echo 'invalid email or password';	
        exit; 
      }

    }
}
}
else 
{  // if email field does not exits then you can't go to the welcome.php
    exit('access denied page 404 not found');
}
?>
<?php
 include_once('connection.php');
 session_start();
 $_SESSION['name']='';

if(isset($_POST['email']))
{
if(empty($_POST['email']) || empty($_POST['pass']))
{
  echo 'all fields are required';
  exit;
}
 else
 {
  $email = test_input( $_POST['email']);

  $pass = crypt(sha1(md5(test_input( $_POST['pass']))), 'imn'); //password tripple layer encryption

  $query="select * from user where email='".$email."' and pswd='".$pass."'  ";
  
  $result=mysqli_query($conn,$query);
  
  if($row = mysqli_fetch_array($result))
  {
    $name = explode(" ",$row['name']); 
    $_SESSION['name']=$name[0];
    echo 1;
  }
  else
  {
    echo 'invalid email or password';	
    exit; 
  }

}
}

//extra security layer (protection from spamers and hackers)
function test_input($data)
{
    $data=trim($data);  //removing white spaces
    $data=stripslashes($data);  // removing back slashes
    $data=htmlspecialchars($data); //converting symbols to html elements
    return $data;
}
?>
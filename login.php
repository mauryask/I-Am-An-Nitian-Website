<?php

 include_once('connection.php');
 session_start();
 $_SESSION['name']='';
 $query='';
if(isset($_POST['email']))
{
if(empty($_POST['email']) || empty($_POST['pass']))
{
  echo 'all fields are required';
  exit;
}
 else
 {
  if($_POST['check']==1)
  {
  $email = test_input( $_POST['email']);
  $pass = crypt(sha1(md5(test_input( $_POST['pass']))), 'imn'); //password tripple layer encryption
  $query="select * from user where email='".$email."' and pswd='".$pass."'  ";
  }
  else
  {
  $email = test_input( $_POST['email']);
  $pass = sha1(md5(test_input( $_POST['pass']))); //password tripple layer encryption
  $query="select * from admin where email='".$email."' and pswd='".$pass."'  ";
  }
  
  $result=mysqli_query($conn,$query);
  
  if($row = mysqli_fetch_array($result))
  {
    $name = explode(" ",$row['name']); 
    $name = $name[0]; 
    $name = (strlen($name)>7) ? substr($name,0,7) : $name;  //only 7 characters are allowed in name fieled
    $_SESSION['name']=$name;
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
//extra security layer (protection from spamers and hackers)
function test_input($data)
{
    $data=trim($data);  //removing white spaces
    $data=stripslashes($data);  // removing back slashes
    $data=htmlspecialchars($data); //converting symbols to html elements
    return $data;
}
?>
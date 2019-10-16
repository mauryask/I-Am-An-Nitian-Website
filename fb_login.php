<?php
include_once('connection.php');

session_start();

if($_POST['id']!=''){ 

    $name = $_POST['name'];
    
    $email = $_POST['email'];
    
    $id = $_POST['id']; 
    
    $phone = 0000000000;

    $fb= 'Facebook';
 
    $pass=crypt(sha1(md5($id)),'imn');  //give id so that no can login
    
    $user_type=2;
    
   $query = "INSERT INTO user (name, email, phone, clg, state, pswd,user_type)
   VALUES ('$name','$email', '$phone', '$fb', '$fb', '$pass','$user_type')";


    if($conn->query($query) === TRUE)
    {
        
        $sql = "select * from user where email='".$email."' ";
      
        $result=mysqli_query($conn,$sql);

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
        echo 0;
        }
    
    }
    else
    {
        echo 0;
    }
}
?>
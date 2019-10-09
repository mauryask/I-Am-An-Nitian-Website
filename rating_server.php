<?php
include_once('connection.php');
session_start();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) 
  && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 2) //prevent in admin from liking the news
{
  $action = $_POST['action'];
  $user_id = $_SESSION['user_id'];
  $post_id = $_POST['id'];

  echo $action;
// query to check users existence

$query_x = "select * from rating_info where user_id = '".$user_id."' and post_id = '".$post_id."'";

$result_x = mysqli_query($conn, $query_x);


/*<<<<<<<<===========================================>>>>>>>>>*/

  if($action == 'like')   //onclik like button  
  {

   if(mysqli_num_rows($result_x)>0) // if user already exists
   {

    $row = mysqli_fetch_assoc($result_x);
    $like_st = $row['like_st'];
    $dislike_st = $row['dislike_st'];
     

   //checking the conditions
   

   if($like_st == 0 && $dislike_st == 0)  //case 1
   {
     $counter = 1;
     $decounter = 0;
     //updating state of like and dislike in rating_info table
    $sql_x = "update rating_info set like_st = {$counter}  where post_id= '".$post_id."'";   

    //updating number of likes and dislikes in rating_info table
    $sql_y = "update tbl_images set likes = likes + {$counter} where id= '".$post_id."'";

    mysqli_query($conn, $sql_x);
    mysqli_query($conn, $sql_y);

   }



  else if($like_st == 0 && $dislike_st == 1)  //case 2
   {
     $counter = 1;
     $decounter=0;
     //updating state of like and dislike in rating_info table
    $sql_x = "update rating_info set like_st = {$counter} , dislike_st = {$decounter} where post_id= '".$post_id."'";   

    //updating number of likes and dislikes in rating_info table
    $sql_y = "update tbl_images set likes = likes + {$counter} , dislikes = dislikes - {$counter} where id= '".$post_id."'";

    mysqli_query($conn, $sql_x);
    mysqli_query($conn, $sql_y);

   }

  else if($like_st == 1 && $dislike_st == 0)  //case 3
   {
    
    $counter = 1;
    $decounter=0;
    //updating state of like and dislike in rating_info table
   $sql_x = "update rating_info set like_st = {$decounter}  where post_id= '".$post_id."'";   

   //updating number of likes and dislikes in rating_info table
   $sql_y = "update tbl_images set likes = likes - {$counter}  where id= '".$post_id."'";

   mysqli_query($conn, $sql_x);
   mysqli_query($conn, $sql_y);


   }


   }
   else // when user first time likes the post
   {
     $like_st = 1;
     $dislike_st = 0;
     $counter = 1;
     $sql_x = "insert into rating_info (user_id, post_id, like_st, dislike_st) 
     values('$user_id', '$post_id', '$like_st', '$dislike_st')";  //inserting in rating_info table

     $sql_y = "update tbl_images set likes = likes + {$counter} where id ='".$post_id."'";
     mysqli_query($conn, $sql_x);
     mysqli_query($conn, $sql_y);


   }

  }

}
else if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) 
  && isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) //prevent in admin from liking the news
{
 echo 1;
}
else
{
  echo 2; // if user is not logged in
}

?>
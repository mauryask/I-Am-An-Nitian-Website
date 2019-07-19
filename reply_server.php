<?php
include_once('connection.php');
session_start();

if(isset($_SESSION['user_id']) && !empty(($_SESSION['user_id']))) // this is used to check whether user is logged in or not
{

    $comment_id  = $_POST['comment_id'];
    $post_id = $_POST[post_id];
    $user_name = $_SESSION['user_name'];
    $reply = addslashes($_POST['reply']); // to allow inverted commas


    $query = "insert into reply (post_id, comment_id, user_name, reply) 
    values('$post_id', '$comment_id', '$user_name', '$reply')";

    mysqli_query($conn, $query);

    
}
else
{
    echo 2; //if user is not logged in
}

?>
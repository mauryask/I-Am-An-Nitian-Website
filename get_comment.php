<?php
include_once('connection.php');

$post_id = $_POST['post_id'];

$query = "select * from comment where post_id = '".$post_id."'";

$result = mysqli_query($conn, $query);

if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
       echo '<div>
                <p style="font-size:15px;font-weight: bold;">'.$row['user_name'].'</p>
                <p style="font-size:14px;">'.$row['comment'].'</p>
                <button class="replyx">Reply <i class="fas fa-reply"></i></button>
                <div class="replex">
                  <form method="post" enctype="multipart/form-data" id="reply_form"> 
                  <textarea type="text" placeholder="Write Your Reply Here.." id="reply" rows="6"></textarea>
                   </form>
                <button class="reply"> Send Reply  <i class="fas fa-reply"></i></button>
                </div>
              </div>
            <div class="cmt-line"></div>';
    }
}
else
{
    echo 'Failed';
}

?>
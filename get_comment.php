<?php
include_once('connection.php');
$post_id = $_POST['post_id'];
$query = "select * from comment where post_id = '".$post_id."' order by id asc";
$result = mysqli_query($conn, $query);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
       echo '<div>
                <p style="font-size:15px;font-weight: bold;">'.$row['user_name'].'</p>
                <p style="font-size:15px;letter-spacing:0.5px;line-height:24px;">'.$row['comment'].'</p>
                <button class="replyx"  onclick="show('.$row['id'].')">Reply <i class="fas fa-reply"></i></button>
                <div class="replex" id="'.$row['id'].'">
                  <form method="post" enctype="multipart/form-data" id="reply_form"> 
                  <textarea type="text" placeholder="Write Your Reply Here.." id="reply" rows="3"></textarea>
                 <button  type="button" class="reply"  onclick="clicked('.$row['id'].')"> Send Reply  <i class="fas fa-reply"></i></button>
                 </form>
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
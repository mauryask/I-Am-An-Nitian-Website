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
                 <p style="font-size:14px;font-weight: bold;"><i class="far fa-user-circle user_icon"></i> '.$row['user_name'].'</p>
                 <p style="font-size:15px;letter-spacing:0.5px;line-height:24px;">'.$row['comment'].'</p>
              </div>
            <div class="cmt-line"></div>';
    }
}
else
{
    echo 'Failed';
}
?>
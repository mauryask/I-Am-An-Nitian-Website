<?php
include_once('connection.php');
$post_id = $_POST['post_id'];
$query = "select * from comment where post_id = '".$post_id."' order by id asc";
$rslts = mysqli_query($conn, $query);
 
if($rslts)
{
    while($row = mysqli_fetch_assoc($rslts))   
    {
       echo '<div>
                 <p style="font-size:14px;font-weight: bold;color:rgba(80,80,80,1);letter-spacing:0;"><i class="fas fa-user-circle user_icon" style="color:green;"></i> &nbsp;'.$row['user_name'].'
                 <span style="color:#rgba(130,130,130,1);font-size:11px;margin-left:3px;font-weight:bold;letter-spacing:0.5px;"><i>('.$row['commented_at'].')</i></span></p>
                 <p class="cmt_got" style="font-size:15px;margin-left:8px;letter-spacing:0.5px;line-height:24px;">'.$row['comment'].'</p>
              </div>
            <div class="cmt-line"></div>';
    }
}

?>
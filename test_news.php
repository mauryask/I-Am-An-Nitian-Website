
<?php
include_once('connection.php');
session_start(); //preventing direct access of this page
if(!isset($_SESSION['user_type']) || empty($_SESSION['user_type']) || $_SESSION['user_type']!=1)
{
 exit("<div style='
    top:50%; 
    left:50%; 
    transform:translate(-50%,-50%);
    position:absolute;
    display:flex;
    flex-direction:column;
    align-items:center;
    '>
    <img src='images/access.png' width='200px' height='200px'>
    <p style='
  
    font-size:35px;
  text-align:center;
  font-weight:bold;
    '
    >Access Denied Page 404 Not Found<p>
    </div>");
}

if(isset($_POST['submit']))
{
   // $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   // name column from table dropped (longblob type)

// testing

$filetmp = $_FILES['image']['tmp_name'];
$filename  = $_FILES['image']['name'];
$filepath="pics/".$filename;


// testing

    $head = addslashes($_POST['heading']);
    $news = addslashes($_POST['news']);
   $views=0;
    $likes=0;
    $comments=0;
        $added_by = $_SESSION['user_name'];
/*===================  Getting time and date ====================*/
//getting IST
date_default_timezone_set('Asia/Kolkata');

//date
$date = date('d');

//month
$months = array("jan", "feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct","Nov", "Dec");
$month =$months[(int)date('m')-1];

//year
$year = date('Y');

//time
$hrs = (int)date('H');
if($hrs>12)
{
    $hrs= $hrs-12;
    if($hrs<10)
    {
        $hrs = "0".$hrs;
    }
    
}
else
{
    $hrs="0".$hrs;
}

$time =$hrs.date(':i A');

$full_time = $month." ".$date.", ".$year.", ".$time.", IST";

/*===================  Getting time and date end ====================*/



if(uploadex($filetmp,$filepath))
{

   // $query="insert into tbl_images (heading, text,views,likes,comments, inserted_at, added_by,file_path)
   $query="insert into tbl_images (heading,text,file_path,views,likes,comments,added_by,inserted_at)  
    values('$head', '$news','$filepath','$views','$likes','$comments','$added_by','$full_time')";
   $result = mysqli_query($conn, $query);
    if($result)  
    {
        //echo  "<script>alert('Inserted successfully')</script>";
        echo  "Successfully inserted";
        header("refresh:4;url = insert_news.php"); //refresh the page after 4 second
        exit;
    }
    else
    {
        //echo  "<script>alert('Insertion Failed')</script>";
        echo  "Successfully inserted";
        header("refresh:4;url = insert_news.php"); //refresh the page after 4 second
    }
}

}

function uploadex($filetmp,$filepath)
{
    return   move_uploaded_file($filetmp,$filepath);
}
?>

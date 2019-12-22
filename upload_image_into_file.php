<?php
include_once('connection.php');

if(isset($_POST['submit']))
{

    $filetmp = $_FILES['image']['tmp_name'];
    $filename  = $_FILES['image']['name'];
    $filepath="pics/".$filename;

    if(uploadex($filetmp,$filepath))
    {
        $sql = "insert into upload_image (file_name, file_path) 
        values('$filename','$filepath')";
      $result =  mysqli_query($conn,$sql);
      if($result)
      {
        echo  "Successfully inserted";
        header("refresh:4;url=upload_image_into_file.php"); //refresh the page after 4 second
      }
    
    else
    {
        echo "insertion Failed";
        header("refresh:4;url=upload_image_into_file.php"); //refresh the page after 4 second
    }
    
    }
  
}

function uploadex($filetmp,$filepath)
{
    return   move_uploaded_file($filetmp,$filepath);
}


?>

<html>
<body>
<form enctype="multipart/form-data" action="upload_image_into_file.php" method="post">
<input type="file" name="image">
<input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
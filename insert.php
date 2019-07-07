<!--
@ This file consists of code for adding news and links to edit news
-->

<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
    $file= addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $head = addslashes($_POST['heading']);
    $news = addslashes($_POST['news']);
    $views=0;
    $likes=0;
    $comments=0;
    $dislikes=0;
    $query="insert into tbl_images (name,heading, text,views,likes,dislikes,comments) 
    values('$file', '$head', '$news','$views','$likes','$dislikes','$comments')";
    if(mysqli_query($conn, $query))  
    {
        echo  "<script>alert('Inserted successfully')</script>";
    }
    else
    {
        echo  "<script>alert('Insertion Failed')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>I Am An Nitian | Admin Panel</title>
<link rel="icon" href="images/imnitian.png">
<meta name="viewport"  content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="theme-color" content="#000">
<meta name="author" content="Shubham Maurya">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="css/left-menu.css" type="text/css" rel="stylesheet">

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<style>

</style>
</head>
<body onload="load_insert()">

<!--=================  Menu Button   ===================-->
<button id="show"><i class="fas fa-bars"></i></button>
<div class="main" style="display:none;" id="main">
<p class="mainh" id="mainh">Add News</p>

<!--=================  Adding News  ===================-->
<div class="add-news" id="add-news">
<form method="post" enctype="multipart/form-data" autocomplete="off">

<input type="file" name="image" id="image"> 

<input type="heading" name="heading" id="heading" placeholder="Heading">

<textarea placeholder="Enter News Here..." name="news" id="news" rows="12" ></textarea>

<input type="submit" name="submit" id="submit" value="Insert" > 

</form>
</div>
</div>


<!--================= Edit News   ===================-->
<div class="mainx" style="display:none;" id="mainx">
    <p class="mainh">Edit News</p>
 <div class="edit-news">
<table>
<tr>
 <th>Id</th>
<th>Image</th>
<th>Heading</th>
<th>News</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
$query = "select * from tbl_images";
$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result))
{
  ?>
  <tr>
    <td style="font-weight:bold;"><?php echo $row['id']  ?></td>
    <td><?php echo '<img class="imgx" alt="news" src="data:image/jpg;base64,'.base64_encode($row['name']).'"/>' ?></td>
    <td class="thead"><?php  echo $row['heading']  ?></td>
    <td><?php echo $row['text'] ?></td>
    <td> <a href="edit.php?edit=<?php echo  $row['id']; ?>">Edit</a> </td>
    <td> <button name="delete" id="<?php  $row['id']; ?>" class="delbutton">Delete</button></td>    
  </tr>
  <?php 
}
?>

</table>
</div>
</div>




<!--=================  Left Side MAnu Bar   ===================-->
<div class="left-menu" class="popup" id="demo">
    <p>Admin Panel</p>
    <button id="add" type="button" onclick="func()">add news</button>
    <button id="edit" type="button" onclick="fune()">edit news</button>
    <button id="delete" type="button">view news</button>
    <button id="statics" type="button">statics</button>
</div>

</body>

</html>



<script type="text/javascript" >
        $(document).ready(function() {

            $(".delbutton").click(function(e) {
                var del_id = $(e.relatedTarget).data('id');
               // var del_id = $(this).attr("id");

                if (confirm("Are You Sure? This Can not Be Undone Later.")) {
                    $.ajax({
                        type : "POST",
                        url : "delete.php", //URL to the delete php script
                        data : 'id=' + del_id,
                        success : function() {
                            alert('Success');
                        }
                    });
                    $(this).parents(".record").animate("fast").animate({
                        opacity : "hide"
                    }, "slow");
                }
                return false;
            });
        });
 </script>





















<script>

function load_insert() //on page loading insertion will be shown
        {
            $('head').append('<link rel="stylesheet" href="css/insert.css" type="text/css"/>');
            document.getElementById('main').style.display='block';
        }
 

$(document).ready(function(){

/*================  Add News ===================*/ 
  $("#add").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    $('head').append('<link rel="stylesheet" href="css/insert.css" type="text/css"/>');
    document.getElementById('main').style.display='block';
    document.getElementById('mainx').style.display='none';
    $('head').remove('<link rel="stylesheet" href="css/edit.css" type="text/css"/>');
    
  })


/*================  Editing News ===================*/   

  $("#edit").click(function(){
    TweenMax.to('#demo',0.5,{scaleX: 0});
    $('head').append('<link rel="stylesheet" href="css/edit.css" type="text/css"/>');
    document.getElementById('mainx').style.display='block';
    document.getElementById('main').style.display='none';
    $('head').remove('<link rel="stylesheet" href="css/insert.css" type="text/css"/>');
  })

    /*================  Form Validation ===================*/   
    $('#submit').click(function(){
        var image_name = $('#image').val();
        var head = $('#heading').val();
        var text = $('#news').val();
        if(image_name== '') 
        {
            alert('Please choose a file');
            return false;
        } 
        else if( head == '' || text == '')
        {
            alert('Please fill all the fields');
            return false;
        }
        else
        {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['png', 'gif','jpg','tif','jpeg','mp4'])== -1)
            {
                alert("invalid image format");
                $('#image').val('');
                return false;
            }
            
        }
    })

/*=======================Hiding and Showing Side Menu bar======================*/
    $('#cut').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX: 0});
    });


    $('#show').on('click', function(){
        TweenMax.to('#demo',0.5,{scaleX:1});
    });

})
</script>

<?php
include_once('connection.php');

$query = "select * from feedback";
$result = mysqli($conn,$query);
$count =0;
while($row = mysqli_fetch_assoc($result))
{

    echo "<tr>
    <td>".$count."</td>
    <td>". $row['user_name']."</td>
    <td>".$row['feedback']."</td>
    <td><button>Delete</button></td>
    <td><button>Reply</button></td>
    </tr>";


    $count++;
}

?>
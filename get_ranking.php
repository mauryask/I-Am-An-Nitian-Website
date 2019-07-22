<?php
include_once('db/connection.php');
$count=0;
$query="select * from ranking";
$result=mysqli_query($conn, $query);
$id=$_POST['id'];

while($row=mysqli_fetch_array($result))
{
    $count++;
    echo '<tr>
    <td>'.$count.'</td>
    <td>'.$row["nit"].'</td>';
    if($id==1)
    {
        echo '<td>'.$row["overall_19"].'</td>
        <td>'.$row["nr_19"].'</td>
        </tr>';
    }
    if($id==2)
    {
        echo '<td>'.$row["overall_18"].'</td>
        <td>'.$row["nr_18"].'</td>
        </tr>'; 
    }
    if($id==3)
    {
        echo '<td>'.$row["overall_17"].'</td>
        <td>'.$row["nr_17"].'</td>
        </tr>'; 
    }
    if($id==4)
    {
        echo '<td>'.$row["overall_16"].'</td>
        <td>'.$row["nr_16"].'</td>
        </tr>'; 
    }
    if($id==5)
    {
        echo '<td>'.$row["overall_15"].'</td>
        <td>'.$row["nr_15"].'</td>
        </tr>'; 
    }
     
}

?>
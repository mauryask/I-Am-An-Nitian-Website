<?php
session_start();
if(isset($_SESSION['name'])) //if user bame exists
{
   echo 1;
}
else{
    echo 0;
}

?>
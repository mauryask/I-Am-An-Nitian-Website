<?php
    session_start();
    session_destroy();
   header("location:index.php"); //on log out go to home page
?>
<?php
 session_start();
 if(!isset($_SESSION['Email_id'])){
     header('location:login.php');
 }
session_destroy();
header('location:index.php');
?>

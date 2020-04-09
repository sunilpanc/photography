<?php
$host="localhost";
$name="root";
$passw="";
$database="photography";
$con= mysqli_connect($host,$name,$passw,$database) or die(mysqli_error($con));
if(!isset($_SESSION))
{
    session_start();
}
?>


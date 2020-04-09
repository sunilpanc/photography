<?php
$conn = new mysqli("localhost","root","","photography") or die(mysqli_error($conn));
if(!isset($_SESSION))
{
    session_start();
}

?>
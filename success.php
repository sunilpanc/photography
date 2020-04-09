<?php 
require 'common.php';
$email = "";
$pass=0;
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	// echo $email;
	$pass=md5($_POST['password']);

	$query = "SELECT email FROM admin WHERE email='$email' AND pass = '$pass'";
	$check = $conn->query($query);
	$total_rows_fetched=$conn->affected_rows;	
	if($total_rows_fetched == 0 )
	{ 
    	echo 'there is no users with email and password in the users table';
    	header('location: admin.php'); 
	}
	else
	{
    	$_SESSION['email'] = $email;
    	header("location:upload.php");
	}

}
?>

<?php
require 'common.php';
if(isset($_POST['submit']))
{
	$conn = new mysqli("localhost","root","","photography") or die(mysqli_error($conn));

	$file=$_FILES['upload'];
	$select = $_POST['category'];
	$type=$_POST['type'];

	$name=$file['name'];
	$error=$file['error'];
	$size=$file['size'];
	$loc = $file['tmp_name'];
	$extension = explode('.', $name);
	$allExt = array('jpg','png','jpeg');


	$query = "select * FROM ".$select;
	$total = $conn->query($query);
	$total_rows = $conn->affected_rows;
	$total_rows=$total_rows+1;
	if(in_array(strtolower($extension[1]), $allExt))
	{
		if($size<1000000000)
		{
			$location = $select.'/pre/'.$total_rows.".".$extension[1];
			move_uploaded_file($loc, $location);
			$query = "INSERT INTO ".$select." (name,oname,type) VALUES ('$total_rows','$name','$type')";
			$total = $conn->query($query);
			echo "Successfully Uploaded...";
			header("location:index.php");

		}
	}

	
}
?>
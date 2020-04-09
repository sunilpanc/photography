
<html>
<?php
include 'Connect.php';
if (!isset($_SESSION['Email_id'])) {

	 header('location: ../login.php');
	 echo"<script>alert('Logged in First');</script>";
}
	$radio=$name=$email=$Mobile=$Address=$Others=$Date=$Address1=$Mobile2="";
	$radio2=$name2=$email2=$Address2=$Mobile1=$Other=$Address3=$Mobile3=$Dates="";
if(isset($_POST['submit']))	
{
	$count=0;
	$name=mysqli_real_escape_string($con,$_POST['name']);
    if(empty($name))
	{
		$name2="Name can't be empty<br>";
		$count=$count+1;
	}
	else
	{
	if(!preg_match("/^[a-z A-Z]+$/",$name))
		{
			$name2="Name is not valid<br>";
			$count=$count+1;
		}
	}
	$email=mysqli_real_escape_string($con,$_POST['email']);
	if(empty($email))
		{
		   	$email2="Email can't be empty <br>";
		   	$count=$count+1;
		}
	else
		{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$email2="Not a valid Email<br>";
				$count=$count+1;
			}
		}
	$Mobile=mysqli_real_escape_string($con,$_POST['Mobile']);

	if(empty($Mobile))
	{
		$Mobile1="Mobile No Filled can't be Empty";
		$count=$count+1;
	}
	else
	{
		if(!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/",$Mobile))
		{
            $Mobile1="Mobile Number is Invalid";
            $count=$count+1;
		}
		else if($Mobile==$Mobile2)
	{
		$Mobile1="Mobile No and Reference No should be Different";
		$count=$count+1;
	}
	}
	$Mobile2=mysqli_real_escape_string($con,$_POST['Reference']);
	if(empty($Mobile2))
	{
		$Mobile3="Mobile No Filled can't be Empty";
		$count=$count+1;
	}
	else
	{
		if(!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/",$Mobile2))
		{
            $Mobile3="Mobile Number is Invalid";
            $count=$count+1;
		}
		else if($Mobile==$Mobile2)
	{
		$Mobile3="Mobile No and Reference No should be Different";
		$count=$count+1;
	}
	}
	$Address=mysqli_real_escape_string($con,$_POST['Home']);
	if(empty($Address))
	{
		$Address2="Address can't be Empty";
		$count=$count+1;
	}
	else
	{
		if(!preg_match("/^[a-z A-Z,0-9]+$/",$Address))
		{
			$Address2="Address is Invalid";
			$count=$count+1;
		}
	}
	$Address1=mysqli_real_escape_string($con,$_POST['Venue']);
	if(empty($Address1))
	{
		$Address3="Address can't be Empty";
		$count=$count+1;
	}
	else
	{
		if(!preg_match("/^[a-z A-Z,0-9]+$/",$Address1))
		{
			$Address3="Address is Invalid";
			$count=$count+1;
		}
	}
	$Others=mysqli_real_escape_string($con,$_POST['Others']);
	if(empty($Others))
	{
		$Other="This Can't be Empty";
		$count=$count+1;
	}
	$Date=mysqli_real_escape_string($con,$_POST['date']);
		if(empty($Date))
		{
			$Dates="Please Select the Date";
			$count=$count+1;
		}
if($count==0)
{
$Type=$_POST['opt'];
$insert="insert into booking(Type,name,email,Contact,Reference_No,Home_address,Venue_Address,Others,Date)values('$Type','$name','$email','$Mobile','$Mobile2','$Address','$Address1','$Others','$Date')";
$restore= mysqli_query($con,$insert)or die(mysqli_error($con)); 
$id=  mysqli_insert_id($con);
$_SESSION['pid']=$id;
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['id']=$id;
$_SESSION['Type']=$Type;
if($Type=="Fashion Shoot" && $count==0)
{
    header("location:Fashion.php");
}
else if($Type=="Wedding" && $count==0)
{
    header("location:Wedding.php");
}
else if($Type=="PreWedding" && $count==0)
{
    header("location:PreWedding.php");
}
else if($Type=="Baby-Shoot" && $count==0)
{
    header("location:BabyShoot.php");
}
}
}
?>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="navbar2.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  <!--script src="Sample.js"></script>-->
</head>
<body class="booking">
	 
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="booking-cta">
<h1>Book your order today</h1>
<p>We Believe in giving our best.That's Why we are best</p>
</div>
</div>
<div class="col-md-7 col-md-offset-1">
<form action="index.php" method="POST">
<div class="form-group">
<div class="radio">
<label class="radio-inline" >
<input type="radio" name="opt" value="Fashion Shoot" checked>
<span>Fashion Shoot</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="Wedding" >
<span>Wedding</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="PreWedding">
<span>PreWedding</span>
</label>

<label class="radio-inline">
<input type="radio" name="opt" value="Baby-Shoot">
<span>Baby Shoot</span>
</label> 
</div>
<div><h5 style='color:red'><?php echo $radio2 ?></h5></div>
</div>
<br>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Name</span>
<input class="form-control" type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name ?>">
</div>
<div><h5 style='color:red'><?php echo $name2 ?></h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Email</span>
<input class="form-control" type="text" name="email" placeholder="Enter Your Email" value="<?php echo $email ?>">
</div>
<div><h5 style='color:red'><?php echo $email2 ?></h5></div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Mobile No</span>
<input class="form-control" type="Telephone" name="Mobile" placeholder="Enter your Mobile Number"value="<?php echo $Mobile ?>">
</div>
<div><h5 style='color:red'><?php echo $Mobile1 ?></h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Reference No</span>
<input class="form-control" type="Telephone" name="Reference" placeholder="Enter Your Reference Number" value="<?php echo $Mobile2 ?>">
</div>
<div><h5 style='color:red'><?php echo $Mobile3 ?></h5></div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Home Address</span>
<input class="form-control" type="Address" name="Home" placeholder="Enter  Address" value="<?php echo $Address ?>">
</div>
<div><h5 style='color:red'><?php echo $Address2 ?></h5></div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Venue Address</span>
<input class="form-control" type="Address" name="Venue" placeholder="Enter Venue Address" value="<?php echo $Address1 ?>">
</div>
<div><h5 style='color:red'><?php echo $Address3 ?></h5></div>
</div>
</div>
<div class="row">    
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Other</span>
<input class="form-control" type="Address" name="Others" placeholder="Enter Your Shoot type" value="<?php echo $Others ?>">
</div>
<div><h5 style='color:red' ><?php echo $Other ?></h5></div>
</div> 
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Date</span>
<input class="form-control" type="Date" name="date" placeholder="Enter Date" value="<?php echo $Date?>">
</div>
<div><?php echo "<h5 style='color:red'>".$Dates."</h5>" ?></div>
</div>
</div>
<div class="row">
<div class="container1">
  <button class="pack" name="submit">Submit</button>
  <div class="overlay">
      <div class="text"><button type="Submit" class="button1" name="submit">Submit</button></div>
  </div>
</div>
</div>    
</form>
</div>
</div>
</div>    

</body>
</html>
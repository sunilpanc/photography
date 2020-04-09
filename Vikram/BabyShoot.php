<?php
include 'Connect.php';
$type=$Type1="";
if(isset($_POST['submit']))
{
if(!isset($_POST['education']))
{
   $type="Please Select an Option";
}
else
{
if(isset($_POST['education']))
{
$Type1=$_POST['education'];
$s=implode(" and ",$Type1);
}
}
if(isset($_POST['education']))
{
$num=$_SESSION['Type'];
$sol=$_SESSION['email'];
require 'PHPMailer/PHPMailerAutoload.php';
$sol=$_SESSION['email'];
$nam=$_SESSION['name'];

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vikramattri123@gmail.com';                 // SMTP username
$mail->Password = 'Singh99@$';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('vikramattri123@gmail.com', 'Ankit Photography');
$mail->addAddress("$sol", "$nam");     // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  */  // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<h4>Your '.$num.' Order is Booked Sucessfully</h4>';
/*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script>alert("Message Sent Successfully")</script>';
}
$read=$_SESSION['name'];
$gain=$_SESSION['id'];
$r="select  amount as Amount from storage where Type='$num' and  Shoot_type='$s'";
$get=  mysqli_query($con,$r) or die(mysqli_error($con));
$show=  mysqli_num_rows($get);
$put=  mysqli_fetch_array($get);
$sum=$put['Amount'];
$solve="INSERT into order_placed(name,Type,Shoot_type,Amount,User_id)values('$read','$num','$s','$sum','$gain')";
$result=  mysqli_query($con,$solve) or die(mysqli_error($con));
$r="select  id from storage where Type='$num' and  Shoot_type='$s'";
header("location:Success1.php");
}
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="Birthday.css"/>
        <script> 
    $(document).ready(function(){
     $("#flip").click(function(){
    $("#panel").slideToggle("slow");  
  });
  $("#slice").click(function(){
    $("#Ray").slideToggle("slow");  
  });
    }
  );
</script>
<style>
#panel{
  padding: 3px;
  display: none;
  background-color:#3e485c;
}
#Ray
{
    padding:3px;
    display:none;
    background-color:#3e485c;
}
#stone
{
    padding:3px;
    display:none;
    background-color:#3e485c;
}
p
{
    color:white;
}
</style>
</head>
<body class="booking">
<div class="container">
<div class="row">
<div class="col-md-7 col-md-push-5">
<div class="booking-cta">
<h1>BABY SHOOT</h1>
</div>
</div>
<div class="col-md-4 col-md-pull-7">
<form method="POST" action="BabyShoot.php" onsubmit="return Jumbo();">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="checkbox-inline">
    <input type="checkbox" value="Photos" name="education[]" id="flip"/><label>Baby Shoot</label>.<br>
<caption class="colors">Rs 3000</caption>
<div id="panel">
    <p>Best 10 photos + Raw Data + Editing</p>
    <p>= Rs 3000</p>
</div>
</label>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="checkbox-inline">
    <input type="checkbox" value="Videos" name="education[]" id="slice"/><label>Birthday Shoot</label>.<br>
<caption class="colors">Rs 5000</caption>
<div id="Ray">
    <p>Photo + video + 50 best best photo + Editing</p>
    <p>= Rs 5000</p>
</div>
</label>
</div>
</div>    
</div>
<div><h5 style="color:red"><?php echo $type ?></h5></div>
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

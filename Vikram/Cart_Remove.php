<?php
include 'Connect.php';
$id4=$_GET['id1'];
echo $id4;
$add=$_SESSION['name'];
$max="delete from order_placed where User_id='$id4' and name='$add'";
$delete="delete from booking where id='$id4' and name='$add'";
$read1=mysqli_query($con,$delete) or die(mysqli_error($con));
$read=mysqli_query($con,$max) or die(mysqli_error($con));
$cave=  mysqli_num_rows($read);
require 'PHPMailer/PHPMailerAutoload.php';
$sol=$_SESSION['email'];
$nam=$_SESSION['name'];
$num=$_SESSION['Type'];
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
$mail->Body    = '<h4>'.$nam.' Your '.$num.' Booking Order has been  Cancelled.</h4>';
/*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script>alert("Message Sent Successfully")</script>';
}
echo $cave;
if($cave==0)
{
    echo"<label>Items Successfully Removed</label>";
    header("location:Success1.php");
}
else
{
	echo "Some Error Occur !";
}
?>

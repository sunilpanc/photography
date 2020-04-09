<?php
include 'connect.php';

require 'Phpmailer/PHPMailerAutoload.php';
//include 'connect.php';
  $name=$email=$subject=$message="";
  $name2=$email2=$subject2=$message2="";
    if(isset($_POST['submit']))
    {
            $name=mysqli_real_escape_string($conn,$_POST['name']);
             if(empty($name))
            {
              $name2="Name can't be empty<br>";
            }
            else
            {
            if(!preg_match("/^[a-z A-Z]+$/",$name))
              {
                $name2="Name is not valid<br>";
              }
            }

            $email=mysqli_real_escape_string($conn,$_POST['email1']);
            if(empty($email))
              {
                  $email2="Email can't be empty <br>";
              }
            else
              {
              if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                  $email2="Not a valid Email<br>";
                }
              }
            
              $subject=mysqli_real_escape_string($conn,$_POST['subject']);
              if(empty($subject))
              {
                $subject2="Subject can't be Empty";
              }
              else
              {
                if(!preg_match("/^[a-z A-Z,0-9]+$/",$subject))
                {
                  $subject2="Subject is Invalid";
                }
              }
           

             $message=mysqli_real_escape_string($conn,$_POST['message']);
              if(empty($message))
              {
                $message2="Message can't be Empty";
              }
              else
              {
                if(!preg_match("/^[a-z A-Z,0-9]+$/",$message))
                {
                  $message2="Message is Invalid";
                }
              }
            

            //*****email**********//
            
              $to =$email;
              $subject1= $subject;
              $message1= "<h4>".$message."</h4>";

              $headers="Content-Type:text/html;charset=utf-8"."\r\n";
              $headers .= "From: ".$name."<".$email.">";

              if(mail($to, $subject1, $message1, $headers))
              {
                echo "Email sent!";
              }
              else
              {  
                echo "Not sent";
              }
            
              /*$mail = new PHPMailer;


    //Server settings
              $mail->SMTPDebug =3;                      // Enable verbose debug output
              $mail->isSMTP();                                            // Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'amankush120@gmail.com';                     // SMTP username
              $mail->Password   = 'aman@1999';                               // SMTP password
              $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
              $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

              //Recipients
              $mail->setFrom($email);
              $mail->addAddress($email);     // Add a recipient
              $mail->addAddress('ellen@example.com');               // Name is optional
              $mail->addReplyTo('info@example.com', 'Information');
              $mail->addCC('cc@example.com');
              $mail->addBCC('bcc@example.com');

              // Attachments
             // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
             // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

              // Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = $subject;
              $mail->Body    = "<h4>".$message."</h4>";
           

              $mail->send();
             */ 
             

            //****sql query*******//
            $query="insert into user(name,email,subject,message) Values('$name','$email','$subject','$message')";
            $run=mysqli_query($conn,$query);
              
            
            // echo"<script>alert('Your message has been sent successfully');</script>";
                 
          


            
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
  <meta charset="UTF-8">
  <title></title>
  <title>Ankit Photography</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="menu.css" type="text/css">
        <script src="menu.js"></script>
  

  <script type="text/javascript" src=contact.js></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

        <body style="background: #000046; 
background: -webkit-linear-gradient(to right, #1CB5E0, #000046); 
background: linear-gradient(to right, #1CB5E0, #000046); 
">
            
     <?php
     include 'navbar.php';
     ?>
            
            
<form action="contactus1.php" method="POST">        
<section class="container my-5">
  <div class="card">
    <div class="row">
      <div class="col-lg-8">
        <div class="card-body form">
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>
            
            <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="name" class="">Your name</label>
                <input type="text" id="name" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Enter Your Name">
              </div>
            <div><h6 style='color:red'><?php echo $name2 ?></h6></div>
            </div>
            
            
            <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="email" class="">Your email</label>
                <input type="text" value="<?php echo $email ?>" name="email1" id="email" class="form-control" name="email" placeholder="Enter Your Email">
              </div>
              <div><h6 style='color:red'><?php echo $email2 ?></h6></div>
            </div>
            </div>
         
            <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <label for="Subject" class="">Subject</label>
                <input type="text" id="subject" class="form-control" name="subject" value="<?php echo $subject ?>" placeholder="Enter Your Subject" >
              </div>
              <div><h6 style='color:red'><?php echo $subject2 ?></h6></div>
            </div>
            </div>
        
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="message">Your message</label>
                  <textarea id="message" class="form-control md-textarea" name="message" rows="3" value="<?php echo $message ?>" placeholder="Enter Your Message"></textarea>
                  <div><h6 style='color:red'><?php echo $message2 ?></h6></div>
                  <button style="margin-top:5px" class="btn btn-primary" name="submit" type="Submit">Submit</button>
                </div>
              </div>
            </div>
         

        </div>

      </div>
     
      <div class="col-lg-4" style="color:#fff; background-color: #0061B0;">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>Madhya Pradesh, 457001, INDIA</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>+917435977621</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>Kushwahavicky743@gmail.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="#" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://m.facebook.com/Ankit-AP-Photography-1238841922837251/" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/ankitphotography_/" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      

    </div>
   

  </div>
  

</section>
</form>
 
<?php
include 'footer.php';
?>
</body>
</html>

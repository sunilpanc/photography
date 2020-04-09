<?php
include 'connect.php';
//require 'Phpmailer/PHPMailerAutoload.php';
//include 'connect.php';
    $fname=$lname=$email=$password="";
    $fname2=$lname2=$email2=$password2="";
    if(isset($_POST['submit']))
    {
            $fname=mysqli_real_escape_string($conn,$_POST['fname']);
             if(empty($fname))
            {
              $fname2="First name can't be empty<br>";
            }
            else
            {
            if(!preg_match("/^[a-z A-Z]+$/",$fname))
              {
                $fname2="First name is not valid<br>";
              }
            }

            $lname=mysqli_real_escape_string($conn,$_POST['lname']);
             if(empty($lname))
            {
              $lname2="Last name can't be empty<br>";
            }
            else
            {
            if(!preg_match("/^[a-z A-Z]+$/",$lname))
              {
                $lname2="Last name is not valid<br>";
              }
            }

            $email=mysqli_real_escape_string($conn,$_POST['email']);
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

            
            $password=mysqli_real_escape_string($conn,$_POST['password']);
             if(empty($password))
            {
              $password2="Password can't be empty<br>";
            }
            else
            {
            if(!preg_match("/(?=.{8,})/",$password))
              {
                $password2="Password is not valid<br>";
              }
            }


             
            

            //*****email**********//
            
              $to =$email;
              $subject1= "Sign Up";
              $message1= "<h4>Welcome to Ankit Photography</h4><h4>We will get back to you soon</h4>";

              $headers="Content-Type:text/html;charset=utf-8"."\r\n";
              $headers .= "From: Ankit Photography";

              if(mail($to, $subject1, $message1, $headers))
              {
                header('location:login.php');
                echo"<script>alert('successfully signed in');</script>";
              }
              else
              {  
                echo "Not sent";
              } 
            
              
              $query="insert into newuser(fname,lname,email,password) Values('$fname','$lname','$email','$password')";
              $run=mysqli_query($conn,$query) or die($mysqli_error($conn)); 
              header('location:index.php');

              
              // $rows=mysqli_num_rows($run);
              // if($rows==0)
              // {
              //   header('location:signup.php');
              // }
              // else
              // {
                
              //   echo"<script>alert('successfully Signed in');</script>";
              //   //header('location:index.php');
              // }

            
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


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
<div class="container" style="width:40%">
<!-- Material form register -->

<div style="margin:40px auto;" class="card">

    <h5 class="card-header bg-info text-center py-4">
        <strong><h1>Sign up</h1></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="signup.php" method="POST">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="fname" id="materialRegisterFormFirstName" placeholder="first name" value="<?php echo $fname ?>" class="form-control" required>
                        
                    </div>
                    <div><h6 style='color:red'><?php echo $fname2 ?></h6></div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" name="lname" id="materialRegisterFormLastName" placeholder="last name" value="<?php echo $lname ?>" class="form-control" required>
                        
                    </div>
                    <div><h6 style='color:red'><?php echo $lname2 ?></h6></div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" name="email" id="materialRegisterFormEmail" placeholder="email" value="<?php echo $email ?>" class="form-control" required>
                
                <div><h6 style='color:red'><?php echo $email2 ?></h6></div>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" placeholder="password" value="<?php echo $password ?>" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required>
              
                <div><h6 style='color:red'><?php echo $password2 ?></h6></div>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters
                </small>
            </div>

         
            <!-- Sign up button -->
            <button name="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

            <!-- Social register -->
         
            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="#" target="_blank">terms of service</a>
            </p>
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
</div>
<?php
include 'footer.php';
?>
</body>
</html>
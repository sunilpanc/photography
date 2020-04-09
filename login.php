<?php

include 'common.php';
    $email=$password="";
    $email2=$password2="";
    if(isset($_POST['submit']))
    {

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

           //****sql query*******//
            $query="SELECT id,email FROM newuser WHERE email='" . $email ."' AND password='" . $password ."'";
            $result=$conn->query($query);
            $rows=$conn->affected_rows;
            if($rows==0)
            {
               $error="<span class='red'>please enter correct email id and password</span>";
               header('location:login.php?error='.$error);
            }
            else
            {
                $row=mysqli_fetch_array($result);
                $_SESSION['Email_id']=$row['email']; 
                $_SESSION['User_id']=$row['id'];
                //echo"<script>alert('successfully Logged in');</script>";
                header('location:index.php');
            }


            
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

<div style="margin:69px auto;" class="card">

    <h5 class="card-header bg-info text-center py-4">
        <strong><h1>Login</h1></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="login.php" method="POST">

        

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" name="email" id="materialRegisterFormEmail" placeholder="email" class="form-control" required>
                <div><h6 style='color:red'><?php echo $email2 ?></h6></div>
                
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password" id="materialRegisterFormPassword" placeholder="password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required>
                <div><h6 style='color:red'><?php echo $password2 ?></h6></div>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters
                </small>
            </div>

         
            <!-- Sign up button -->
            <button name="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>

            <!-- Social register -->
         
            <hr>

            <!-- Terms of service -->
            <p>
                Don't have an account
                <a href="signup.php" target="_self">Sign Up</a>

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
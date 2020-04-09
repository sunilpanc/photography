 <?php
        require 'connect.php';
          

  $email=$_POST['email1'];       
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $query = "SELECT * FROM subscriber WHERE email='$email'";
  $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
  $num = mysqli_num_rows($result);

  
  if ($num != 0) {
      header('location:index.php');
    echo "<script>alert('Email Already Exists');</script>";
    
  
  } else if (!preg_match($regex_email, $email)) {
       header('location:index.php');
    echo "<script>alert('Email is not valid');</script>";
   
  } 
else 
      {
    $query = "insert into subscriber(email)values('$email')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
     header('location:index.php');
    echo "<script>alert('Welcome to Ankit Photography');</script>"; 
   
    
      }
  
 ?>



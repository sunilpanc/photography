 <?php
    require 'connect.php';
    $name=$email=$subject=$message="";
    $name1=$email1=$subject1=$message1="";
    if(isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $email=$_POST['email1'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            
            /*$query="insert into user(name,email,subject,message)Values($name','$email','$subject','$message')";
            $run=mysqli_query($conn,$query);
              
            if($run)
            {
                 header('location:contactus.php');
                 echo"<script>alert('Your message has been sent successfully');</script>";
            }
            else
            {
                 echo"errors:".mysqli_error($conn);
            }*/
        }


        //validation
    if(empty($name))
    {
        $name1="Name cant be empty<br>";
    }
    else
    {
        if(!preg_match("/^[a-zA-Z]{3,}/",$name))
        {
            $name1="Name is not valid";
        }
    }
    if(empty($email))
    {
        $email1="Email cant be empty<br>";
    }
    else
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $email1="Email is not valid";   
        }
    }

 
    if(empty($subject))
    {
        $subject1="Subject cant be empty<br>";
    }

    if(empty($message))
    {
        $message1="Message cant be empty<br>";
    }

    $query="insert into user(name,email,subject,message)Values($name','$email','$subject','$message')";
    $run=mysqli_query($conn,$query);
              
            if($run)
            {
                 header('location:contactus.php');
                 echo"<script>alert('Your message has been sent successfully');</script>";
            }
            else
            {
                 echo"errors:".mysqli_error($conn);
            }
     
    ?>
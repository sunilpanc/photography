<?php require '../common.php';
// $conn = new mysqli("localhost","root","","photography") or die(mysqli_error($conn));
$query = "SELECT * FROM kidsimage";
$total_rows = $conn->affected_rows;
$check = $conn->query($query);
$check1 = $conn->query($query);

?>
<!DOCTYPE html>

<html>

<head>
  <title>Ankit Photography</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/main-logo.png">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="menu.css">
  <script src="menu.js"></script>
</head>

<body>

  <!--this is for navigation bar-->
  <div id="navbar-use">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar1 navbar-always">

    <a href="../index.php" class="navbar-brand"><img src="images/main-logo1.png" alt="AP photography" id="w3s" width="90px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../preweddingimage/prewedding.php" class="nav-link">Pre-Wedding</a></li>
          <li class="nav-item"><a href="../weddingimage/wedding.php" class="nav-link">Wedding</a></li>
          <li class="nav-item"><a href="../modelingimage/model.php" class="nav-link">Modeling</a></li>
          <li class="nav-item"><a href="../kidsimage/baby.php" class="nav-link">Kids Shoot</a></li>
          <li class="nav-item"><a href="../aboutus.php" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="../contactus1.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="../vikram/index.php" class="nav-link">Book Now</a></li>
          <?php
              if (isset($_SESSION['email']))
                   {
          ?>
              <li class="nav-item list-7"><a href="../logout.php" class="nav-link">Admin Logout</a><div class="hover-line-1"></div></li>
          <?php } else{  ?>
          <li class="nav-item list-7"><a href="../admin.php" class="nav-link">Admin Login</a><div class="hover-line-1"></div></li>
      <?php } ?>
           <?php if (!isset($_SESSION['Email_id'])) {?>
          <li class="nav-item"><a href="../signup.php" class="nav-link">Signup</a></li>
          <li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
       <?php } else{  ?>   
          <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
 </div>
 <br><br><br><br>
  <!--images attachment-->

  <div class="container-fluid">
    <div class="jumbotron">
      <center>
        <h1>Welcome to our Kids Shoot page</h1>
        <p>
            In our website less amount of images because of customer does not give authentication us to upload
            his or her image. If you want to give order of your kids shoot but some confusion then call us to
            below given number, we will show our last completed project's images and videos.

        </p>
      </center>

    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

<!-- <img src="pre/1.jpg" alt=""  class="img-responsive img-thumbnail col-4 myImg" onclick="big(this)"/> -->

    <div class="row">
        <?php
        while ($row = $check->fetch_assoc()) {
             if($row['type']=='horizontal')
             {
              $ext = explode(".",$row['oname']);
              echo "<img src=\"pre/".$row['name'].".".$ext[1]."\" alt=\"\"  class=\"img-responsive img-thumbnail col-4 myImg\" onclick=\"big(this)\"/>";
             }
            }
        while ($row1 = $check1->fetch_assoc()) {
           if($row1['type']=='vertical')
             {
              $ext = explode(".",$row1['oname']);
              echo "<img src=\"pre/".$row1['name'].".".$ext[1]."\" alt=\"\"  class=\"img-responsive img-thumbnail col-4 myImg\" onclick=\"big(this)\"/>";
             }
            }
        ?>
    </div>


  <div class="bottom-bar">
      <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 bottom-side-space">
        <img src="images/main-logo.png" alt="AP photography" width="90px" height="60px"/>
        <p class="bottom-bar-text">
          Welcome to our photography world. Our team foucus on quality images. We capture every moment of your life.
          Our mission is to provide best quality images. We care to our customer. We are working on how we can
          give best service and provide to best class service to our customer.
        </p>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12">
          <h3 class="bottom-bar-text-h3">CONTACT<h3>
            <p class="bottom-bar-text">
               Pithampur, Sector No.3, Dhar,<br/>Madhya Pradesh, India
            </p>
            <p class="bottom-bar-text">
                M:+919977959596 <br>
                M:+917697666611
            </p>
            <p class="bottom-bar-text">
                <a href="mailto:Ankit333panchal@gmail.com" class="bottom-email" target="_blank" rel="noopener noreferrer">Email us</a>
            </p>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-12 ">
          <h3 class="bottom-bar-text-h3">Social<h3>
          <p class="bottom-bar-text">
            <i class="fa fa-instagram distance-icon"></i><a href="https://www.instagram.com/ankitphotography_/" class="bottom-email">Instagram</a><br>
            <i class="fa fa-facebook distance-icon"></i><a href="https://www.facebook.com/Ankit-AP-Photography-1238841922837251/" class="bottom-email">Facebook</a><br>
            <i class="fa fa-twitter distance-icon"></i><a href="#" class="bottom-email">Twitter</a><br>
          </p>
      </div>
      </div>

      <div class="row bottom-last">
        <div class="col-lg-12 text-center">
          <p class="copyright">
              © COPYRIGHT 2019 BY ANKITPHOTOGRAPHY.COM
          </p>
        </div>
      </div>
  </div>


  <script type="text/javascript">
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var navBar = document.getElementById("navbar-use");

function big(x){
  modal.style.display = "block";
    modalImg.src = x.src;
    captionText.innerHTML = x.alt;
    navBar.style.display ="none";
}
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
  navBar.style.display = "block";
}
</script>
</body>

</html>

 <div id="navbar-use">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar1 navbar-always">

    <a href="index.php" class="navbar-brand"><img src="images/main-logo1.png" alt="AP photography" id="w3s" width="90px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="nav-item"><a href="preweddingimage/prewedding.php" class="nav-link">Pre-Wedding</a></li>
          <li class="nav-item"><a href="weddingimage/wedding.php" class="nav-link">Wedding</a></li>
          <li class="nav-item"><a href="modelimage/model.php" class="nav-link">Modeling</a></li>
          <li class="nav-item"><a href="kidsimage/baby.php" class="nav-link">Kids Shoot</a></li>
          <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="contactus1.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="vikram/index.php" class="nav-link">Book Now</a></li>
           <?php
              if (isset($_SESSION['email']))
                   {
          ?>
              <li class="nav-item"><a href="logout.php" class="nav-link">Admin Logout</a></li>
          <?php } else{  ?>
          <li class="nav-item"><a href="admin.php" class="nav-link">Admin Login</a></li>
      <?php } ?>
       <?php if (!isset($_SESSION['Email_id'])) {?>
          <li class="nav-item"><a href="signup.php" class="nav-link">Signup</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
       <?php } else{  ?>   
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <?php } ?>  
      </ul>
    </div>
  </nav>
 </div>
 <br><br><br><br>       

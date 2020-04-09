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
	
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style >
		.meet{
			margin-top: 20px;
		}
		.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
	</style>
</head>
<body>
  <?php
  include 'navbar.php';
  ?>
    
<div class="Team">	
	<div class="container">
		<div class="row">
				<div class="col-lg-12 text-center">  
					<h4 class="Team_title">About Us</h4>
					<h2 class="Team_sec">MEET THE TEAM</h2> 
					<p class="Team_cont">WE ARE COMMITTED TO PROVIDING OUR CUSTOMERS WITH EXCEPTIONAL SERVICE</p>  
				</div>	  
		</div>	
<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6 meet"> 
    <div class="card">
      <img src="team1.jpg" alt="Jane" style="width:100%" height="350px">
      <div class="container">
        <h2>Kushwaha Vikash</h2>
        <p class="title">B-tech Student at Lovely Professional University</p>
        <p>Programming-Web development-Repeat</p>
        <p></p>
        <p>kushwahavicky743@gmail.com</p>
        <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="#" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/kushwaha-vikas-323144170/" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/kushwaha.vickys" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-6 meet">
    <div class="card">
      <img src="team2.jpg" alt="Mike" style="width:100%" height="350px">
      <div class="container">
        <h2>Sunil Pancahl</h2>
        <p class="title">B-tech Student at Lovely Professional University</p>
        <p>I'm a decent listener,learner and quick to get new abilities.</p>
        <p>sunilpanchal123.sp@gmail.com</p>
        <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/sunilpanchal_/" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://m.facebook.com/profile.php?ref=bookmarks" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
          </ul>
        
      </div>
    </div>
  </div>
 </div>
 <div class="row">
  <div class="col-sm-12 col-md-6 col-lg-6  meet">
    <div class="card">
      <img src="team3.jpg" alt="John" style="width:100%" height="350px">
      <div class="container">
        <h2>Vikram Singh</h2>
        <p class="title">B-tech Student at Lovely Professional University</p>
        <p>I am very aficinado and always curious to learn new skills.</p>
        <p>vikramattri123@gmail.com</p>
        <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/vikramsingh_99/" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/vikram-singh-cse" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/vikram.singhattri.3" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
          </ul>
        
      </div>
    </div>
  </div>

<div class="col-sm-12 col-md-6 col-lg-6 meet">
    <div class="card">
      <img src="team6.jpg" alt="John" style="width:100%" height="350px">
      <div class="container">
        <h2>Ankit Panchal</h2>
        <p class="title">Photographer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Ankit333panchal@gmail.com</p>
        <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/ankitphotography_/" class="btn btn-danger" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
 
            <li class="list-inline-item">
              <a href="#" class="btn btn-warning" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://m.facebook.com/Ankit-AP-Photography-1238841922837251/" class="btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <i class="fab fa-facebook"> </i>
              </a>
            </li>
          </ul>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
 
 
 <?php
  include 'footer.php';
    ?>
 
</body>
</html>
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
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="upload.css">
  <style type="text/css">
  	body {
  background-image: url('images/1.jpg');
  background-size: 100% 800px;
}</style>
  <script src="index.js"></script>
</head>
<body>
<?php require 'navbar.php'?>

<div class="container update">
<form method="POST" enctype="multipart/form-data" action="uploadFile.php">
<div class="form-group">
    <label for="exampleFormControlFile1">Select Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload">
  </div>
<div class="form-group">
	<label for="category">Select Category</label>
    <select class="form-control" id="category" name="category">
        <option value="preweddingimage">Pre-wedding</option>
        <option value="weddingimage">Wedding</option>
        <option value="modelingimage">Modeling</option>
        <option value="kidsimage">Kids shoot</option>
    </select>
</div>
<div class="form-group">
  <label for="type">Select Category</label>
    <select class="form-control" id="type" name="type">
        <option value="horizontal">Horizontal</option>
        <option value="vertical">Vertical</option>
    </select>
</div>
<div class="form-group">
	<input type="submit" name="submit" class="btn btn-primary">
</div>
</form>
</div>

<br><br><br><br>
<?php require 'footer.php'?>
</body>
</html>
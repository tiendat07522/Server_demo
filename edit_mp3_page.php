<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head><title>Upload</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
EDiT MP3
 <form action=".php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Name">Name: </label>
    <input type="text" class="form-control" name="Name">
  </div>
  <div class="form-group">
    <label for="Singer">Singer:</label>
    <input type="text" class="form-control" name="Singer">
  </div>
   <div class="form-group">
    <label for="File">File:</label>
    <input type="file" class="form-control" name="File">
  </div>
  <button type="submit" class="btn btn-default">Upload</button>
</form>
</div>
</body>
</html>
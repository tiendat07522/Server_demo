<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head><title>Category</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
   <div class="left-nav">
            <div class="logo-team">
                <a href="#">Team 4</a>
            </div>
            <ul class="nav-pre">
                <li><a href="home.php"><i class="fas fa-align-justify"></i> DashBoard</a></li>
                <li><a href="upload_mp3.php"><i class="fas fa-folder-plus"></i> Upload MP3</a></li>
                <li><a href="upload_mp4.php"><i class="fas fa-bible"></i> Upload MP4</a></li>
                <li><a href="add_category.php"><i class="fas fa-book-open"></i>  Add Category</a></li>
                <li><a href="add_singer.php"><i class="fas fa-microchip"></i>  Add Singer</a></li>
                <li><a href="singer_manage.php"><i class="fas fa-server"></i>  Singer Manage</a></li>
                <li><a href="category_manage.php"><i class="fas fa-memory"></i>  Category Manage</a></li>
            </ul>
        </div>
<div class="right-nav">
    Add Category
 <form action="add_category_file.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Name">Tên Category: </label>
    <input type="text" class="form-control" name="category">
  </div>
  <button type="submit" class="btn btn-default">Add</button>
</form>
</div>
</div>
</body>
</html>
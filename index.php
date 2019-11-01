<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head><title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css"  href="./css/style.css" media="all" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <div class="login-text">
  <form action="login_client.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    email
    <input type="text" class="form-control" name="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    pass
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
  </div>

</div>

</body>
</html>
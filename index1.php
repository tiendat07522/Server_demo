<?php require_once 'config.php';?>
<!DOCTYPE html>
<html>
    <head><title>Demo</title>
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
<form class="form-signin"  action="upload.php" method="POST" enctype="multipart/form-data">
        	<h2 class="form-signin-heading">Upload File</h2>
	  		<div class="form-group">
	   		<label for="InputFile">File input</label>
	    	<input type="file" name="file" id="InputFile">
	    	<p class="help-block">Upload JPEG Files với dung lượng nhỏ hơn 100 KiloBytes</p>
	    	<!-- Thong bao loi  -->
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      </form>
	
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

</body>
</html>

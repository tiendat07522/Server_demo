<?php require_once 'config.php';?>
<?php require_once 'upload_mp4_file.php';
require_once 'add_singer_file.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head><title>Upload</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
     <link rel="stylesheet" type="text/css" href="./css/style.css" media="all" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="filter"class="cover"></div>
    <div id="Dialog" class="dialog">
              <div class="box-dialog">
                Add Singer
                  <i onclick="closeDialog()" class="fas fa-window-close buttonClose"></i>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="Name">Singer: </label>
                    <input type="text" class="form-control" name="singer">
                  </div>
                  <div class="form-group">
                    <label for="File">Ảnh Ca sĩ:</label>
                    <input type="file" class="form-control" name="avatar" required>
                  </div>
                  <button type="submit" class="btn btn-default">Add</button>
                </form>
              </div>
    </div>
 
<div class="container-fluid big-box">
   <div class="left-nav">
            <div class="logo-team">
                <a href="#">Team 4</a>
            </div>
      <ul class="nav-pre">
                <li><a href="home.php"> DashBoard</a></li>
                <li><a href="upload_mp3.php"> Upload MP3</a></li>
                <li><a href="upload_mp4.php"> Upload MP4</a></li>
                <li><a href="add_category.php">  Add Category</a></li>
                <li><a href="add_singer.php"> Add Singer</a></li>
                <li><a href="singer_manage.php"> Singer Manage</a></li>
                <li><a href="category_manage.php">  Category Manage</a></li>
                <li><a href="custom_playlist.php">  Custom Playlist</a></li>
                <li><a href="custom_playlist_mp3.php"> Add Mp3 To Playlist</a></li>
            </ul>
        </div>
   <div class="right-nav">
    Upload Video
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Name">Tên Hiển thị: </label>
    <input type="text" class="form-control" name="Name" required>
  </div>
   <div class="form-group">
    <label for="Name">Tên Đường dẫn: </label>
    <input type="text" class="form-control" name="Namepath" required>
  </div>
  <div class="form-group box-singer">
      <label for="Singer">Singer:</label>
      <div class="box-singer-left">
      <select class="form-control" name="Singer">
      <?php require_once 'config.php';?>
      <?php  $query="SELECT * FROM `singer`";
            $result = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($result)) :
      ?>
        <option value="<?php echo $row['singer']?>"><?php echo $row['singer']?></option>
      <?php endwhile?>
      </select>
      </div>
    <div class="box-singer-right">
       <a href="#" class="btn btn-primary btnAdd" onclick="showDialog()"><i class="fas fa-user-plus"></i></a>
    </div>
          <div class="clear-both"></div>
    </div>
   <div class="form-group">
    <label for="File">File:</label>
    <input type="file" class="form-control" name="File" >
  </div>
  <div class="form-group">
    <label for="File">Ảnh hiển thị:</label>
    <input type="file" class="form-control" name="picture">
  
  </div>
  <button type="submit" class="btn btn-default btn-add">Upload</button>
  <div class="clear-both"></div>
</form>
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
   </div>
</div>

</body>
<script src="js/main.js"></script>
</html>
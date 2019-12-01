<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head><title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
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
    <div class="container-fluid big-box">
        <div class="top-nav">
            <a href="#" class="link-dashboard">DashBoard</a>
        </div>
    <!-- end top-nav -->
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
                <li><a href="custom_playlist.php"><i class="fas fa-memory"></i>  Custom Playlist</a></li>
                <li><a href="custom_playlist_mp3.php"><i class="fas fa-memory"></i>  Add Mp3 To Playlist</a></li>
            </ul>
        </div>
        <!-- end left nav -->
            <div class="right-nav">
                 Add MP3 To Playlist
                <form action="file.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Name">Playlist </label>
                   <select class="form-control" name="playlist_id">
              <?php  $query="SELECT * FROM `customplaylist`";
                    $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_assoc($result)) :
              ?>
                <option value="<?php echo $row['custom_playlist_id']?>"><?php echo $row['custom_playlist_id']?></option>
              <?php endwhile?>
              </select>
                </div>
                   <div class="form-group">
                    <label for="Name">MP3 </label>
                   <select class="form-control" name="mp3_id">
              <?php  $query="SELECT * FROM `mp3`";
                    $result = mysqli_query($con,$query);
                  while ($row = mysqli_fetch_assoc($result)) :
              ?>
                <option value="<?php echo $row['mp3_id']?>"><?php echo $row['mp3_id']?></option>
              <?php endwhile?>
              </select>
                </div>
                <button type="submit" class="btn btn-default">Add</button>
                </form>
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            </div>
            <!-- end right nav -->
        </div>
    <!-- end big-box -->
</body>
</html>
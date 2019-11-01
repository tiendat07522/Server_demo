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
                <li><a href="#"><i class="fas fa-align-justify"></i> DashBoard</a></li>
                <li><a href="upload_mp3.php"><i class="fas fa-folder-plus"></i> Upload MP3</a></li>
                <li><a href="upload_mp4.php"><i class="fas fa-bible"></i> Upload MP4</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>  ....</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>  ....</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>  ....</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>  ....</a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>  ....</a></li>
            </ul>
        </div>
      
        <!-- end left nav -->
        <div class="right-nav">
            <div class="box-mp3-view">
                <div class="title-list"><p>All Songs</p></div>
                   <!-- PHP -->
        <?php 
        $query="SELECT * FROM mp3";
        $result = mysqli_query($con,$query);
        $post_view= array();
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
                <div class="one-song">
                    <div class="text-song">
                        <p><?php echo $row['name']?></p>
                        <p><?php echo $row['singer']?></p>
                    </div>
                    <div class="icon-song">
                        <a href="remove.php?del=<?php echo $row['mp3_id']?>"> <i class="fas fa-trash-alt"></i></a>
                        <a href="edit_mp3_page.php?del=<?php echo $row['mp3_id']?>"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="clear-both"></div>
                </div>
                  <?php endwhile ?>
                    <div class="clear-both"></div>
                </div>
                <!-- end box mp3 view -->
                <div class="box-mp4-view">
                         <div class="title-list"><p>All videos</p></div>
                   <!-- PHP -->
        <?php 
        $query="SELECT * FROM mp4";
        $result = mysqli_query($con,$query);
        $post_view= array();
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
                <div class="one-song">
                    <div class="text-song">
                        <p><?php echo $row['name']?></p>
                        <p><?php echo $row['singer']?></p>
                          <div class="clear-both"></div>
                    </div>
                    <div class="icon-song">
                        <a href="remove_mp4.php?del=<?php echo $row['mp4_id']?>"> <i class="fas fa-trash-alt"></i></a>
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </div>
                    <div class="clear-both"></div>
                </div>
                  <?php endwhile ?>
                    <div class="clear-both"></div>
                </div>
            </div>
            <!-- end right nav -->
        </div>
    <!-- end big-box -->
</body>
</html>
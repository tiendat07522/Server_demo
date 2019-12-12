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
    <!-- end top-nav -->
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
                        <div class="image-song">
                <?php 
                     $link_img=substr($row['picture'],8);
                    
                ?>
                <img src="<?php echo $link_img ?>" alt="">
                
                </div>

                    <div class="text-song">
                        <p><?php echo $row['name']?></p>
                        <p class="p-singer"><?php echo $row['singer']?></p>
                    </div>
                    <div class="icon-song">
                        <a href="remove.php?del=<?php echo $row['mp3_id']?>"> <i class="fas fa-trash-alt"></i></a>
                        <a href="edit_mp3_page.php?edit=<?php echo $row['mp3_id']?>"><i class="fas fa-edit"></i></a>
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
                      <div class="image-song">
                <?php 
                     $link_img=substr($row['picture'],8);
                ?>
                <img src="<?php echo $link_img ?>" alt="">
                </div>
                    <div class="text-song">
                        <p><?php echo $row['name']?></p>
                        <p><?php echo $row['singer']?></p>
                          <div class="clear-both"></div>
                    </div>
                    <div class="icon-song">
                        <a href="remove_mp4.php?del=<?php echo $row['mp4_id']?>"> <i class="fas fa-trash-alt"></i></a>
                        <a href="edit_mp4_page.php?edit=<?php echo $row['mp4_id']?>"><i class="fas fa-edit"></i></a>
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
    <!-- footer -->
            <div class="footer">
                <hr>
                Coppy Right 2019
            </div>
    <!-- foooter -->
</body>
</html>
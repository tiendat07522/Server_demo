<?php require_once 'config.php';?>
<?php 
$custom_playlist_name=$_POST['custom_playlist_name'];
$custom_playlist_category=$_POST['custom_playlist_category'];
$custom_playlist_image=$_FILES['image']['name'];


// image
$avatar=$_FILES['image']['name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];
$max_size = 1000000;

if(isset($avatar) && !empty($avatar)){

	// lay duoi file
	$extension = substr($avatar, strpos($avatar, '.') + 1);

	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $extension == $size<=$max_size){
    $location = "uploads/";
    $filePath="demophp/".$location.$avatar;
		if(move_uploaded_file($_FILES['image']['tmp_name'],$location.$avatar)){
            $smsg = "Thêm Ca Sĩ thành công !";
			// dua thong tin file vao csdl
			$query = "INSERT INTO `customplaylist` (custom_playlist_name, custom_playlist_category,custom_playlist_image) VALUES ('$custom_playlist_name', '$custom_playlist_category','$filePath')";
            $result = mysqli_query($con,$query);      
		}else{
			$fmsg = "Add Thất bại";
	
		}
	}else{
        $fmsg = "Chỉ hỗ trợ file JPEG và dung lượng không quá 100 KiloBytes";
	}

	}else{
        $fmsg = "Chọn file upload Và tên Ca sĩ";
	}
?>

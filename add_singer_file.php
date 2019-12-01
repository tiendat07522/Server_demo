<?php require_once 'config.php';?>
<?php 
$singer=$_POST['singer'];
$avatar=$_FILES['avatar']['name'];
$size = $_FILES['avatar']['size'];
$type = $_FILES['avatar']['type'];
$max_size = 1000000;
if(isset($avatar) && !empty($avatar)){

	// lay duoi file
	$extension = substr($avatar, strpos($avatar, '.') + 1);

	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $extension == $size<=$max_size){
    $location = "uploads/";
    $filePath="demophp/".$location.$avatar;
		if(move_uploaded_file($_FILES['avatar']['tmp_name'],$location.$avatar)){
            $smsg = "Thêm Ca Sĩ thành công !";
			// dua thong tin file vao csdl
			$query = "INSERT INTO `singer` (singer, avatar) VALUES ('$singer', '$filePath')";
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
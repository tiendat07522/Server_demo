<?php require_once 'config.php';?>
<?php
error_reporting(E_ERROR | E_PARSE);
	// gioi han file upload khong qua 100kb
	$max_size = 1000000;	
	// lay thong tin file upload
	$name = $_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	if(isset($name) && !empty($name)){

	// lay duoi file
	$extension = substr($name, strpos($name, '.') + 1);

	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $extension == $size<=$max_size){
		$location = "uploads/";
		if(move_uploaded_file($_FILES['file']['tmp_name'],$location.$name)){
            $smsg = "Upload thành công !";
			// dua thong tin file vao csdl
			$query = "INSERT INTO `upload` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location$name')";
            $result = mysqli_query($con,$query);
           
		}else{
			$fmsg = "Upload Thất bại";
	
		}
	}else{
        $fmsg = "Chỉ hỗ trợ file JPEG và dung lượng không quá 100 KiloBytes";
	}

	}else{
        $fmsg = "Chọn file upload";
	}
	
?>
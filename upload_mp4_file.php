<?php require_once 'config.php';?>
<?php
	// gioi han file upload khong qua 100kb
	$max_size = 10000000;	
	// lay thong tin file upload
  $name = $_POST['Name'];
  $namefile=$_FILES['File']['name'];
  $singer=$_POST['Singer'];
  $size = $_FILES['File']['size'];
  $type = $_FILES['File']['type'];
  
	// echo 'name'.$name;
	// echo 'size'.$size;
	// echo 'type'.$type;
	if(isset($name) && !empty($name)){

	// lay duoi file
	$extension = substr($namefile, strpos($namefile, '.') + 1);
	echo $extension;
	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "mp4") && $type == "video/mp4" && $extension == $size<=$max_size){
		$location = "uploads/mp4/";
		if(move_uploaded_file($_FILES['File']['tmp_name'],$location.$name)){
            $smsg = "Upload thành công !";
			// dua thong tin file vao csdl
			$query = "INSERT INTO `mp4` (name, singer, category, views,path) VALUES ('$name', '$singer', NULL,NULL,'$location$name')";
            $result = mysqli_query($con,$query);
            echo $smsg;
		}else{
			$fmsg = "Upload Thất bại";
            echo $fmsg;
		}
	}else{
        $fmsg = "Chỉ hỗ trợ file MP4 và dung lượng không quá 100MB";
         echo $fmsg;
	}
	}else{
        $fmsg = "Chọn file upload";
         echo $fmsg;
	}	
?>

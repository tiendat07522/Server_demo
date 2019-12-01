<?php require_once 'config.php';?>
<?php
	// gioi han file upload khong qua 100kb
	$max_size = 10000000;	
	// lay thong tin file upload
  $name = $_POST['Name'];
  $namefile=$_FILES['File']['name'];
  $namepath=$_POST['Namepath'];/**video */
  $category=$_POST['Category'];
  $picture_name=$_FILES['picture']['name'];
  $singer=$_POST['Singer'];
  $size = $_FILES['File']['size'];
  $type = $_FILES['File']['type'];
	if(isset($name) && !empty($name)){

	// lay duoi file
	$extension = substr($namefile, strpos($namefile, '.') + 1);
	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "mp4") && $type == "video/mp4" && $extension == $size<=$max_size){
		$location = "uploads/mp4/";
		$location_picture="uploads/image/";
		$value_picture="demophp/".$location_picture.$picture_name;
		$value_mp4="demophp/".$location.$namepath.".mp4";
		if(move_uploaded_file($_FILES['File']['tmp_name'],$location.$namepath.".mp4")){
			// dua thong tin file vao csdl
			$query = "INSERT INTO `mp4` (name, singer, category, views,path,picture) VALUES ('$name', '$singer','$category',NULL,'$value_mp4','$value_picture')";
			$result = mysqli_query($con,$query);
			$smsg = "Upload thành công !";
			move_uploaded_file($_FILES['picture']['tmp_name'],$location_picture.$picture_name);
          
		}else{
			$fmsg = "Upload Thất bại";
            
		}
	}else{
        $fmsg = "Chỉ hỗ trợ file MP4 và dung lượng không quá 100MB";
        
	}
	}else{
        $fmsg = "Chọn file upload";
      
	}	
?>

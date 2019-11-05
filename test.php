<?php require_once 'config.php';?>
<?php
	// gioi han file upload khong qua 100kb
	$max_size = 10000000;	
	// lay thong tin file upload
  $name = $_POST['Name'];
  $namepath=$_POST['Namepath'];
  $namefile=$_FILES['File']['name'];
  $picture_name=$_FILES['picture']['name'];
  $singer=$_POST['Singer'];
  $category=$_POST['Category'];
  $size = $_FILES['File']['size'];
  $type = $_FILES['File']['type'];
	if(isset($name) && !empty($name)){

	// lay duoi file
	$extension = substr($namefile, strpos($namefile, '.') + 1);
	// kiem tra xem co dung la file hinh anh hay khong
	if(($extension == "mp3") && $type == "audio/mp3" && $extension == $size<=$max_size){
		$location = "uploads/mp3/";
		$location_picture="uploads/image/";
		$value_picture="demophp/".$location_picture.$picture_name;
		if(move_uploaded_file($_FILES['File']['tmp_name'],$location.$namepath.".mp3")){
			$smsg = "Upload thành công !";
			$value_mp3="demophp/".$location.$namepath.".mp3";
			move_uploaded_file($_FILES['picture']['tmp_name'],$location_picture.$picture_name);
			// dua thong tin file vao csdl
			$query = "INSERT INTO `mp3` (name, singer, category, views,path,picture) VALUES ('$name', '$singer', '$category',NULL,'$value_mp3','$value_picture')";
			$result = mysqli_query($con,$query);
            echo $smsg;
		}else{
			$fmsg = "Upload Thất bại";
            echo $fmsg;
		}
	}else{
        $fmsg = "Chỉ hỗ trợ file MP3 và dung lượng không quá 100MB";
         echo $fmsg;
	}
	}else{
        $fmsg = "Chọn file upload";
         echo $fmsg;
	}	
?>

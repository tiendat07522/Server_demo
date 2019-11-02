<?php require_once 'config.php';?>
<?php 
$mp3_id=$_POST['mp3_id'];
$mp4_id=$_POST['mp4_id'];
$users_id=$_POST['users_id'];
$data=array();
	if(strlen($username)>0 && strlen($password)>0){
        $query = "INSERT INTO `playlist` (mp3_id, mp4_id, users_id) VALUES ('$mp3_id', '$mp4_id','$users_id')";
        $result = mysqli_query($con,$query);
     $data[]=array('status'=>200);
     	print json_encode($data);
    }else{
        $data[]=array('status'=>404);
        	print json_encode($data);
    }
?>
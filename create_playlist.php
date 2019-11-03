<?php require_once 'config.php';?>
<?php 
$playlist_name=$_POST['playlist_name'];
$users_id=$_POST['users_id'];
$data=array();
	if(strlen($username)>0 && strlen($password)>0){
        $query = "INSERT INTO `playlist` (playlist_name, users_id,count) VALUES ('$playlist_name', '$users_id',NULL)";
        $result = mysqli_query($con,$query);
     $data[]=array('status'=>200);
     	print json_encode($data);
    }else{
        $data[]=array('status'=>404);
        	print json_encode($data);
    }
?>
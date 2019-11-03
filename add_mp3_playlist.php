<?php require_once 'config.php';?>
<?php 
$playlist_id=$_POST['playlist_id'];
$mp3_id=$_POST['mp3_id'];
$data=array();
	if(strlen($username)>0 && strlen($password)>0){
        $query = "INSERT INTO `playlist_details` (playlist_id, mp3_id) VALUES ('$playlist_id', '$mp3_id')";
        $result = mysqli_query($con,$query);
     $data[]=array('status'=>200);
     	print json_encode($data);
    }else{
        $data[]=array('status'=>404);
        	print json_encode($data);
    }
?>
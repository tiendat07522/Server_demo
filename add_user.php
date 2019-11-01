<?php require_once 'config.php';?>
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$data=array();
$smsg = "Upload thành công !";
	if(strlen($username)>0 && strlen($password)>0){
        $query = "INSERT INTO `users` (name, username, password) VALUES ('$name', '$username','$password')";
        $result = mysqli_query($con,$query);
     $data[]=array('status'=>200);
     	print json_encode($data);
    }else{
        $data[]=array('status'=>404);
        	print json_encode($data);
    }

?>
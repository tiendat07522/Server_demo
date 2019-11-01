<?php require_once 'config.php';?>
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$data=array();
$smsg = "Upload thành công !";
	if($strlen($username)>0 && strlen($password)>0){
        $query = "INSERT INTO `users` (name, username, password) VALUES ('$name', '$username','$password')";
        $result = mysqli_query($con,$query);
     print $data[]=array('status'=>200);
    }else{
        print $data[]=array('status'=>404);
    }

?>
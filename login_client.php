<?php require_once 'config.php';?>
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$user=array();
if (strlen($username)>0 && strlen($password)>0) {
	$query="select * from users where username ='".$username."' and password ='".$password."' ";
	$result = mysqli_query($con,$query);
	if(mysqli_fetch_array($result)){
	$query="select * from users where username ='".$username."' and password ='".$password."' ";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
		$id=$row['users_id'];
		$name=$row['name'];
		$username=$row['username'];
		$password=$row['password'];
		$user[]= array('status'=>200,'id'=>$id,'name'=>$name,'username'=>$username,'password'=>$password);
		print_r (json_encode($user));
} else {
	$user[]=array('status'=>404);
	print json_encode($user);
}
}
?>
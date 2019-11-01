<?php require_once 'config.php';?>
<?php 
$username=$_POST['username'];
$password=$_POST['password'];
if (strlen($username)>0 && strlen($password)>0) {
	$result = mysqli_query($con,"select * from admin where username ='".$username."' and password ='".$password."' ");
if($data = mysqli_fetch_array($result)){
	echo '1';
} else {
	echo '0';
}
}
?>
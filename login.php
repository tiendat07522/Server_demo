<?php require_once 'config.php';?>
<?php 
$username= $_POST['email'];
$password= $_POST['pass'];
// $crypt = md5($password);
if (strlen($username)>0 && strlen($password)>0) {
	$result = mysqli_query($con,"select * from admin where username ='".$username."' and password ='".$password."' ");
if($data = mysqli_fetch_array($result)){
	header("Location:http://demoproject.com/home");
} else {
	echo '<script language="javascript">';
    echo 'alert("Sai mật khẩu")';
    echo '</script>';
    // header("Location:http://demoproject.com/");
}
}
 ?>
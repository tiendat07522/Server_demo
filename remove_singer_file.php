 <?php require_once 'config.php';?>
 <?php 
	$singer = $_GET['del'];
    if (isset($_GET['del'])) {
   $re= mysqli_query($con, "DELETE FROM singer WHERE singer='$singer';");
    header('location: singer_manage.php');
}
?>
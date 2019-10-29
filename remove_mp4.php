 <?php require_once 'config.php';?>
 <?php 
	    $id = $_GET['del'];
        $query="SELECT * FROM mp4 where mp4_id=$id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result) ;
        $pathfile=$row['path'];
    if (isset($_GET['del'])) {
    mysqli_query($con, "DELETE FROM mp4 WHERE mp4_id=$id");
    unlink($row['path']);
	$_SESSION['message'] = "Address deleted!"; 
	header('location: home.php');
}
?>
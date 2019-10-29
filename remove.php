 <?php require_once 'config.php';?>
 <?php 
	    $id = $_GET['del'];
        $query="SELECT * FROM mp3 where mp3_id=$id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result) ;
        $pathfile=$row['path'];
    if (isset($_GET['del'])) {
    mysqli_query($con, "DELETE FROM mp3 WHERE mp3_id=$id");
    unlink($row['path']);
	$_SESSION['message'] = "Address deleted!"; 
	header('location: home.php');
}
?>
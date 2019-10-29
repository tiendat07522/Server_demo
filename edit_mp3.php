 <?php require_once 'config.php';?>
 <?php 
	    $id = $_GET['edit'];
        $query="SELECT * FROM mp3 where mp3_id=$id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result) ;
        $pathfile=$row['path'];
    if (isset($_GET['edit'])) {
    mysqli_query($con, "DELETE FROM mp3 WHERE mp3_id=$id");
	$_SESSION['message'] = "UPDATED !"; 
	header('location: home.php');
}
?>
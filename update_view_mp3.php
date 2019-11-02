 <?php require_once 'config.php';?>
 <?php 
	    $mp3_id = $_POST['mp3_id'];
        $query="UPDATE table_name
                SET column1 = value1, column2 = value2, ...
                    WHERE condition;";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result) ;
        $pathfile=$row['path'];
    if (isset($_GET['edit'])) {
    mysqli_query($con, "DELETE FROM mp3 WHERE mp3_id=$id");
	$_SESSION['message'] = "UPDATED !"; 
	header('location: home.php');
}
?>
 <?php require_once 'config.php';?>
 <?php 
	$category = $_GET['del'];
    if (isset($_GET['del'])) {
   $re= mysqli_query($con, "DELETE FROM category WHERE category=$category;");
    header('location: category_manage.php');
      
}
?>
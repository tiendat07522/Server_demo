 <?php require_once 'config.php';?>
 <?php 
        $category_old = $_GET['edit'];
        $category_new =$_POST['category'];
    if (isset($_GET['category'])) {
        $query="UPDATE category
                SET category=$category_new
                WHERE category=$category_old";
    mysqli_query($con, $query);
	$_SESSION['message'] = "UPDATED !"; 
	header('location: category_manage.php');
}
?>
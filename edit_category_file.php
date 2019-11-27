 <?php require_once 'config.php';?>
 <?php 
        $category_old = $_GET['edit'];
        $category_new =$_POST['category'];
        echo $category_old;
         echo $category_new;
    if (isset($_GET['edit'])) {
        $query="UPDATE category
                SET category=$category_new
                WHERE category=$category_old";
    $resul=mysqli_query($con, $query);
if($resul){
    echo '1';
}else{echo'2';};
	$_SESSION['message'] = "UPDATED !"; 
    // header('location: category_manage.php');
    
}
?>
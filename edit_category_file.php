 <?php require_once 'config.php';?>
 <?php 
        $category_old = $_GET['edit'];
        $category_new =$_POST['category'];
    
    if (isset($_GET['edit'])) {
        $query="UPDATE category
                SET category='$category_new'
                WHERE category='$category_old' ";
    $resul=mysqli_query($con, $query);
if($resul){
      header('location: category_manage.php');
}else{
    echo'Fail';
};
}
?>
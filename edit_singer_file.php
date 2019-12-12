 <?php require_once 'config.php';?>
 <?php 
        $singerOld = $_GET['edit'];
        $singerNew =$_POST['singer'];
    
    if (isset($_GET['edit'])) {
        $query="UPDATE singer
                SET singer='$singerNew'
                WHERE singer='$singerOld' ";
    $resul=mysqli_query($con, $query);
if($resul){
      header('location: singer_manage.php');
}else{
    echo'Fail';
};
}
?>
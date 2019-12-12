 <?php require_once 'config.php';?>
 <?php 
        $id = $_POST['id'];
        $data=array();
    if (isset($id)) {
  $result=mysqli_query($con, "DELETE FROM playlist_details WHERE playlist_details_id=$id");
  if($result){
    $data[]= array('status'=>200);
    	print_r (json_encode($data));
  }else{
 $data[]= array('status'=>404);
    	print_r (json_encode($data));
  }
    }
?>
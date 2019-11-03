 <?php require_once 'config.php';?>
 <?php 

        $mp4_id = $_POST['mp4_id'];
    // get view from mp4
    $func="SELECT * FROM `mp4`";
    $rest=mysqli_query($con,$func);
    $row = mysqli_fetch_assoc($rest);
    $view=$row['view'];
    $view_count = $view+1;
        $query="UPDATE mp4
                SET view=$view_count
                WHERE mp4_id=$mp4_id";
        if($result = mysqli_query($con,$query)){
             $data[]=array('status'=>200);
     	print json_encode($data);
        }else{
             $data[]=array('status'=>404);
     	print json_encode($data);
        }
        // $row = mysqli_fetch_assoc($result) ;
?>
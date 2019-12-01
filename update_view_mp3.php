 <?php require_once 'config.php';?>
 <?php 
        $mp3_id = $_POST['mp3_id'];
    // get view from mp3
    $func="SELECT * FROM `mp3`";
    $rest=mysqli_query($con,$func);
    $row = mysqli_fetch_assoc($rest);
    $view=$row['views'];
    $view_count = $view+1;
        $query="UPDATE mp3
                SET views=$view_count
                WHERE mp3_id=$mp3_id";
        if($result = mysqli_query($con,$query)){
             $data[]=array('status'=>200);
     	print json_encode($data);
        }else{
             $data[]=array('status'=>404);
     	print json_encode($data);
        }
        // $row = mysqli_fetch_assoc($result) ;
?>
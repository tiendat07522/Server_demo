<?php require_once 'config.php';?>
<?php 
$playlist_arr= array();
// details
$playlist_id=$_POST['playlist_id'];
$getdata="SELECT * FROM `playlist_details` where playlist_id=$playlist_id";
$rest = mysqli_query($con,$getdata);
while ($data = mysqli_fetch_assoc($rest)){
 $playlist_details_id=$data['playlist_details_id'];
 $mp3_id=$data['mp3_id'];
 $query="SELECT * FROM `mp3` where mp3_id=$mp3_id";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row['mp3_id'];
$name=$row['name'];
$singer=$row['singer'];
$category=$row['category'];
$views=$row['views'];
$path =$row['path'];
$picture=$row['picture'];
$playlist_arr[]= array('id'=>$id,'name'=>$name,'singer'=>$singer,'category'=>$category,'views'=>$views,'path'=>$path,'picture'=>$picture);
};
print json_encode($playlist_arr);
?>
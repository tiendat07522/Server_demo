<?php require_once 'config.php';?>
<?php 
$playlist_arr= array();


// details
$getdata="SELECT * FROM `playlist_details`";
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

// // playlist
// $query="SELECT * FROM `playlist`";
// $result = mysqli_query($con,$query);
// while ($row = mysqli_fetch_assoc($result)) {
// $playlist_id=$row['playlist_id'];
// $playlist_name=$row['playlist_name'];
// $users_id=$row['users_id'];


// // $playlist_arr[]= array('playlist_id'=>$playlist_id,'playlist_name'=>$playlist_name,'users_id'=>$users_id);

print json_encode($playlist_arr);
?>
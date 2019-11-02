<?php require_once 'config.php';?>
<?php 
$query="SELECT * FROM `playlist`";
$result = mysqli_query($con,$query);
$post_view= array();
while ($row = mysqli_fetch_assoc($result)) {
$id=$row['playlist_id'];
$mp3_id=$row['mp3_id'];
$mp4_id=$row['mp4_id'];
$users_id=$row['users_id'];
$post_view[]= array('playlist_id'=>$id,'mp3_id'=>$mp3_id,'mp4_id'=>$mp4_id,'users_id'=>$users_id);
};
print json_encode($post_view);
?>
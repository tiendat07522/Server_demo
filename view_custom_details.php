<?php require_once 'config.php';?>
<?php 
$custom_playlist_id=$_POST['custom_playlist_id'];

$query="SELECT * FROM `customplaylist_details` WHERE custom_playlist_id=$custom_playlist_id ";
$result = mysqli_query($con,$query);
$post_view= array();
while ($row = mysqli_fetch_assoc($result)) {
$id=$row['id'];
$custom_playlist_id=$row['custom_playlist_id'];
$mp3_id=$row['mp3_id'];
// 
$query_mp3="SELECT * FROM `mp3` WHERE mp3_id=$mp3_id ";
$result_mp3 = mysqli_query($con,$query_mp3);
$row_mp3=mysqli_fetch_assoc($result_mp3);

$name=$row_mp3['name'];
$singer=$row_mp3['singer'];
$category=$row_mp3['category'];
$views=$row_mp3['views'];
$path =$row_mp3['path'];
$picture=$row_mp3['picture'];
// 
$post_view[]= array("playlist_details_id"=>$id,"custom_playlist_id"=>$custom_playlist_id,"name"=>$name,"singer"=>$singer,"views"=>$views,"path"=>$path,"picture"=>$picture);
};
print json_encode($post_view);
?>
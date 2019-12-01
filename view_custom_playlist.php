<?php require_once 'config.php';?>
<?php 
$query="SELECT * FROM `customplaylist`";
$result = mysqli_query($con,$query);
$post_view= array();
while ($row = mysqli_fetch_assoc($result)) {
$id=$row['custom_playlist_id'];
$name=$row['custom_playlist_name'];
$category=$row['custom_playlist_category'];
$image=$row['custom_playlist_image'];
$post_view[]= array('custom_playlist_id'=>$id,'custom_playlist_name'=>$name,'custom_playlist_category'=>$category,'custom_playlist_image'=>$image);
};
print json_encode($post_view);
?>
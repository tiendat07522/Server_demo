<?php require_once 'config.php';?>
<?php 
$users_id=$_POST['users_id'];
$playlist_arr= array();
$query="SELECT * FROM `playlist` where users_id=$users_id";
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result)) {
$playlist_id=$row['playlist_id'];
$playlist_name=$row['playlist_name'];
$users_id=$row['users_id'];
$playlist_arr[]= array('playlist_id'=>$playlist_id,'playlist_name'=>$playlist_name,'users_id'=>$users_id);
};
print json_encode($playlist_arr);
?>
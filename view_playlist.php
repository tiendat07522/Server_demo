<?php require_once 'config.php';?>
<?php 
$playlist_arr= array();
$query="SELECT * FROM `playlist`";
$result = mysqli_query($con,$query);
$i=0;
while ($row = mysqli_fetch_assoc($result)) {
$playlist_id=$row['playlist_id'];
$playlist_name=$row['playlist_name'];
$users_id=$row['users_id'];
// details
$getdata="SELECT * FROM `playlist_details`";
$rest = mysqli_query($con,$query);
while ($data = mysqli_fetch_assoc($rest)){
   i+=1;
}


$playlist_arr[]= array('playlist_id'=>$playlist_id,'playlist_name'=>$playlist_name,'users_id'=>$users_id);
};
print json_encode($playlist_arr);
?>
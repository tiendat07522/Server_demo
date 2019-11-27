<?php require_once 'config.php';?>
<?php 
$singer=$_POST['singer'];
$query="SELECT * FROM `mp3`  where singer=$singer";
$result = mysqli_query($con,$query);
$post_view= array();
while ($row = mysqli_fetch_assoc($result)) {
$id=$row['mp3_id'];
$name=$row['name'];
$singer=$row['singer'];
$category=$row['category'];
$views=$row['views'];
$path =$row['path'];
$picture=$row['picture'];
$post_view[]= array('id'=>$id,'name'=>$name,'singer'=>$singer,'category'=>$category,'views'=>$views,'path'=>$path,'picture'=>$picture);
};
print json_encode($post_view);
?>
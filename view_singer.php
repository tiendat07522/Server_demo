<?php require_once 'config.php';?>
<?php 
$query="SELECT * FROM `singer`";
$result = mysqli_query($con,$query);
$post_view= array();
while ($row = mysqli_fetch_assoc($result)) {
$singer=$row['singer'];
$post_view[]= array('singer'=>$singer);
};
print json_encode($post_view);
?>
<?php require_once 'config.php';?>
<?php 

$playlist_id=$_POST['playlist_id'];
$mp3_id=$_POST['mp3_id'];
        $query = "INSERT INTO `customplaylist_details` (custom_playlist_id, mp3_id) VALUES ('$playlist_id', '$mp3_id')";
        $result = mysqli_query($con,$query);
     if($result){
         $smsg="Thành công ";
     }
    else{
        $fmsg="Chọn PlayList và chọn nhạc ! ";
    }
?>


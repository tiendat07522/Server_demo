<?php require_once 'config.php';?>
<? 
$playlist_id=$_POST['playlist_id'];
$mp3_id=$_POST['mp3_id'];
        $query = "INSERT INTO `customplaylist_details` (playlist_id,mp3_id) VALUES ($playlist_id,$mp3_id)";
        $result = mysqli_query($con,$query);
        if ($result) {
        $smsg = "Thêm Thành Công !";
        } 
        else{
           $fmsg="Chọn Thông tin !";
        }    
?>

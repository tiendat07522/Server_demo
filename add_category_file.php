<?php require_once 'config.php';?>
<?php 
$category=$_POST['category'];
        $query = "INSERT INTO `category` (category) VALUES ('$category')";
        $result = mysqli_query($con,$query);
        if ($result) {
        $smsg = "Thêm Category Thành Công !";
        } 
        else{
           $fmsg="Nhập Tên Category !";
        }
?>
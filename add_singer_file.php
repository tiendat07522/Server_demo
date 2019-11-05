<?php require_once 'config.php';?>
<?php 
$singer=$_POST['singer'];
        $query = "INSERT INTO `singer` (singer) VALUES ('$singer')";
        $result = mysqli_query($con,$query);
        if ($result) {
          echo 'Success !';
        } 
        else{
            echo 'Fail !';
        }
?>
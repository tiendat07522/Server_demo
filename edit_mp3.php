 <?php require_once 'config.php';?>
 <?php 
	    $id = $_GET['edit'];
        $query="SELECT * FROM mp3 where mp3_id=$id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result) ;
        $pathfile=$row['path'];
        $pathpic=$row['picture'];
        // 
        $name=$_POST['Name'];
        $path=$_POST['Namepath'];
        $singer=$_POST['Singer'];
        $category=$_POST['Category'];
        $namefile=$_POST['File']['name'];
        //

        $picture_name=$_FILES['picture']['name'];
          $singer=$_POST['Singer'];
            $category=$_POST['Category'];
            $size = $_FILES['File']['size'];
             $type = $_FILES['File']['type'];
    if (isset($_GET['edit'])) {
          $my_query="UPDATE mp3
           SET      name ='$name',
                   singer = '$singer',
                   category='$category',
                    path ='$pathfile',
                    picture='$pathpic'
               WHERE mp3_id=$id ";
             $update= mysqli_query($con,$my_query);
              if($update){
                       $smsg = "Update thành công !";
                       echo $smsg;
                }
        else{
            echo "fail";
        }
        
    }
?>

<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['subgallery'])){

      
      $image1 = $_FILES['img1']['name'];
      $image1_temp = $_FILES['img1']['tmp_name'];
      $image1_folder = '../image/'.$image1;
      
      $image2 = $_FILES['img2']['name'];
      $image2_temp = $_FILES['img2']['tmp_name'];
      $image2_folder = '../image/'.$image2;

      $image3 = $_FILES['img3']['name'];
      $image3_temp = $_FILES['img3']['tmp_name'];
      $image3_folder = '../image/'.$image3;
      
        $Ename=$_POST['ename'];
        $Edate=$_POST['edate'];

      $query="INSERT INTO `gallery`(`Event_name`, `Event_date`, `Img1`, `Img2`, `Img3`) VALUES ('$Ename','$Edate','$image1','$image2','$image3')";

      $run = mysqli_query($con, $query);

      if($run){
            move_uploaded_file($image1_temp, $image1_folder);
            move_uploaded_file($image2_temp, $image2_folder);
            move_uploaded_file($image3_temp, $image3_folder);
            $_SESSION['sutitle']="Successful";
            $_SESSION['sumessage']="Event Image Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry,Event Image Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

?>
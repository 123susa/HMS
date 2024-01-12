<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['subdirect'])){

      
      $head_image = $_FILES['directimg']['name'];
      $head_image_temp = $_FILES['directimg']['tmp_name'];
      $head_image_folder = '../image/'.$head_image;
      $head = $_POST['directname'];
      $position = $_POST['directposit'];
      $cont = $_POST['directcontent'];
      
      $query="INSERT INTO `head_top`(`Head_name`, `Head_img`, `Head_position`, `Head_content`) VALUES ('$head','$head_image','$position','$cont')";

      $run = mysqli_query($con, $query);

      if($run){
            move_uploaded_file($head_image_temp, $head_image_folder);
            $_SESSION['sutitle']="Successful";
            $_SESSION['sumessage']="Change Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry, Change Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

if(isset($_POST['subicon'])){

      $icon=$_POST['iconname'];
      $name=$_POST['iconhead'];
      $para=$_POST['iconpara'];
      
      $query="INSERT INTO `icondetail`(`iconName`, `name`, `para`) VALUES ('$icon','$name','$para')";
      $run = mysqli_query($con, $query);

      if($run){
            $_SESSION['sutitle']="Successful";
            $_SESSION['sumessage']="Adding The Service... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry, Adding The Service... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}
?>
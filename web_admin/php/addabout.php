<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['subabout'])){

    $head=$_POST['abouthead'];
    $para1=$_POST['aboutpara1'];
    $para2=$_POST['aboutpara2'];
      
      $query="INSERT INTO `aboutus`(`AboutHead`, `AboutPara1`, `AboutPara2`) VALUES ('$head','$para1','$para2')";

      $run = mysqli_query($con, $query);

      if($run){
            $_SESSION['sutitle']="Successful";
            $_SESSION['sumessage']="About Content Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry,About Content Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

?>
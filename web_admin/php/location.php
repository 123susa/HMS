<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['subloc'])){

      $name = $_POST['logoname'];
      $location = $_FILES['logoimg']['name'];
      $location_temp = $_FILES['logoimg']['tmp_name'];
      $location_folder = '../image/'.$location;

      
      $query="INSERT INTO `location`(`locationname`,`locationimg`) VALUES ('$name','$location')";

      $run = mysqli_query($con, $query);

      if($run){
            move_uploaded_file($location_temp, $location_folder);
            $_SESSION['sutitle']="Location";
            $_SESSION['sumessage']="Location Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry, Location Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

?>
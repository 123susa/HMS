<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['subhost'])){

    $address=$_POST['address'];
    $email=$_POST['hostemail'];
    $phone=$_POST['hostphone'];
    $emerg=$_POST['hostemery'];
      
      $query="INSERT INTO `hospital_locations`(`LoactionAddress`, `HospitalEmail`, `HospitalPhone`, `HospitalEmerg`, `checked`) VALUES ('$address','$email','$phone','$emerg',0)";

      $run = mysqli_query($con, $query);

      if($run){
            move_uploaded_file($new_image_temp, $new_image_folder);
            $_SESSION['sutitle']="Add Location";
            $_SESSION['sumessage']="hospital Location Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry, hospital Locations Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

?>
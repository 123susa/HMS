<?php
session_start();
$con = mysqli_connect('localhost','root','','avhost');

// Testimonials
if(isset($_POST['submit'])){

      
      $new_image = $_FILES['newsimg']['name'];
      $new_image_temp = $_FILES['newsimg']['tmp_name'];
      $new_image_folder = '../image/'.$new_image;
      $head = $_POST['newsname'];
      $date = $_POST['newdate'];
      $msg = $_POST['newcontent'];
      
      $query="INSERT INTO `news_data`(`News_heading`, `News_img`, `News_text`, `News_date`) VALUES ('$head','$new_image','$msg','$date')";

      $run = mysqli_query($con, $query);

      if($run){
            move_uploaded_file($new_image_temp, $new_image_folder);
            $_SESSION['sutitle']="News";
            $_SESSION['sumessage']="News Is Successfully Added... ";
            header('location:../admin/editweb.php');
            exit(0);
      }
      else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="Sorry, News Is Not Added... ";
        header('location:../admin/editweb.php');
        exit(0);
        }
}

?>
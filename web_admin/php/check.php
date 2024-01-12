<?php
session_start();
$con=mysqli_connect('localhost','root','','avhost');
if(isset($_POST['conshow'])){
    //check 1 is for sended message.
    $check="UPDATE `contact` SET `check`='1' WHERE `sno`='{$_POST['conshow']}'";

    $crun=mysqli_query($con,$check);
    if($crun == true){
        $_SESSION['sutitle']="User Message!";
        $_SESSION['sumessage']="Message is sended successfully!";
        header('location:../admin/message.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Message not is sended successfully!";
        header('location:../admin/message.php');
        exit(0);
    }
}

if(isset($_POST['leavecheck'])){
    //check 1 is for sended message.
    $check="UPDATE `leave_schedule` SET `checkcom`='1' WHERE `sno`='{$_POST['leavecheck']}'";

    $crun=mysqli_query($con,$check);
    if($crun == true){
        $_SESSION['sutitle']="Leave complete!";
        $_SESSION['sumessage']="Welcome Back !";
        header('location:../admin/leave.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Something is unsuccessfull!";
        header('location:../admin/leave.php');
        exit(0);
    }
}

if(isset($_POST['appointcom'])){
    //check 1 is for sended message.
    $check="UPDATE `user_appointment` SET `checkb`='1' WHERE `Asno`='{$_POST['appointcom']}'";

    $crun=mysqli_query($con,$check);
    if($crun == true){
        $_SESSION['sutitle']="Patient Appointment!";
        $_SESSION['sumessage']="Patient appointment completed !";
        header('location:../admin/appointment.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Patient appointment is not completed!";
        header('location:../admin/appointment.php');
        exit(0);
    }
}

if(isset($_POST['feededit'])){
    //check 1 is for show message.
    $check="UPDATE `feedback` SET `checked`='1' WHERE `sno`='{$_POST['feededit']}'";

    $crun=mysqli_query($con,$check);
    if($crun == true){
        $_SESSION['sutitle']="Feedback!";
        $_SESSION['sumessage']="Feedback will be show on website!";
        header('location:../admin/editweb.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Feedback is not edit!";
        header('location:../admin/editweb.php');
        exit(0);
    }
}

if(isset($_POST['hostedit'])){
    //check 1 is for sended message.
    $check="UPDATE `hospital_locations` SET `checked`='1' WHERE `sno`='{$_POST['hostedit']}'";

    $crun=mysqli_query($con,$check);
    if($crun == true){
        $_SESSION['sutitle']="Hospital Location!";
        $_SESSION['sumessage']="Hospital Location show on web !";
        header('location:../admin/editweb.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Something is unsuccessfull!";
        header('location:../admin/editweb.php');
        exit(0);
    }
}

?>
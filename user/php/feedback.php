<?php
session_start();

$con=mysqli_connect('localhost','root','','avhost');

if(isset($_POST['submit'])){

    $email=$_POST['femail'];
    $text=$_POST['ftext'];

    $sql="INSERT INTO `feedback`(`Useremail`, `Feedback`, `checked`) VALUES ('$email','$text',0);";
    $run=mysqli_query($con,$sql);
    if($run){
        $_SESSION['sutitle']="FeedBack";
        $_SESSION['sumessage']="Feedback Send Successfully!";
        header('location:../fullweb/index.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Error";
        $_SESSION['ermessage']="FeedBack Unsuccessfull!";
        header('location:../fullweb/index.php');
        exit(0);
    }
}

?>
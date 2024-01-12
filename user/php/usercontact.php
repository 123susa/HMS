<?php
session_start();
$con=mysqli_connect('localhost','root','','avhost');

if(!empty($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
    $sql="INSERT INTO `contact`(`Name`,`Email`,`Phone`,`Msg`) VALUES ('$name','$email','$phone','$msg')";
    $query=mysqli_query($con,$sql);
    if($query == true){
        $_SESSION['sutitle']="Contact Message";
        $_SESSION['sumessage']="Message Send Successfully!";
        header('location:../fullweb/contact.php');
        exit(0);
    }
    else{
        $_SESSION['ertitle']="Error Message";
        $_SESSION['ermessage']="Message Unsuccessfull!";
        header('location:../fullweb/contact.php');
        exit(0);
    }
}

?>
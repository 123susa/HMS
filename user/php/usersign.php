<?php
session_start();
$con=mysqli_connect('localhost','root','','avhost') or die("connection failed");

if(isset($_POST['usubmit'])){
    $name=$_POST['Name'];
    $gender=$_POST['Gender'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $cpass=$_POST['Cpassword'];

    $emailcheck="SELECT * FROM `user_sign` WHERE `Email`='$email'";
    $ch=mysqli_query($con,$emailcheck);
    $count=mysqli_num_rows($ch);
    if($count != 1){
        if($pass == $cpass){
            $sql="INSERT INTO `user_sign`( `Image`,`Username`, `Gender`, `Phone`, `Email`, `Password`, `Confirm`) VALUE('person.png','$name','$gender','$phone','$email','$pass','$cpass')";
            $res=mysqli_query($con,$sql);
            if($res == true){
                $_SESSION['sutitle']="Good Luck!";
                $_SESSION['sumessage']="Your Account Is Created Successfully.";
                header('location:../web/login.php');
                exit(0);
            }
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Your Password Not Matched.";
            header('location:../web/signup.php');
            exit(0);
        }
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Your Email Is Already Exists.";
        header('location:../web/signup.php');
        exit(0);
    }
}
?>

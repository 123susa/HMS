<?php
session_start();
$con=mysqli_connect('localhost','root','','avhost') or die("connection failed");

if(isset($_POST['usubmit'])){
    // echo "<script>alert('i am in submit.');</script>";
    $name=$_POST['Name'];
    $gender=$_POST['Gender'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
    $dep=$_POST['Dep'];
    $atype=$_POST['Atype'];
    $pass=$_POST['Password'];
    $cpass=$_POST['Cpassword'];

    $emailcheck="SELECT * FROM `hospital_detail` WHERE `Email`='$email'";
    $ch=mysqli_query($con,$emailcheck);
    $count=mysqli_num_rows($ch);
    if($count != 1){
        // echo "<script>alert('Email is not exist');</script>";
        if($pass == $cpass){
            $sql="INSERT INTO `hospital_detail`( `Host_Image`,`Host_Name`, `Gender`, `Phone`, `Email`,`Host_dep`,`Account_type`, `Password`, `Confirm`) VALUE('person.png','$name','$gender','$phone','$email','$dep','$atype','$pass','$cpass')";
            $res=mysqli_query($con,$sql);
            if($res == true){
                $_SESSION['sutitle']="Good Luck!";
                $_SESSION['sumessage']="Your Account Is Created Successfully.";
                header('location:../sign/adminlog.php');
                exit(0);
            }
        }
        else{
            // echo "<script>alert('Password not match.');</script>";
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Your Password Not Matched.";
            header('location:../sign/adminsign.php');
            exit(0);
        }
    }
    else{
    // echo "<script>alert('Email is exist.');</script>";
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="Your Email Is Already Exists.";
        header('location:../sign/adminsign.php');
        exit(0);
    }
}
?>

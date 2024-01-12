<?php
session_start();
    $con=mysqli_connect('localhost','root','','avhost');

    if(isset($_POST['change'])){
        $pass=$_POST['Password'];
        $cpass=$_POST['Cpassword'];
        // echo $_POST['change'];
        $sql="UPDATE `user_sign` SET `Password`='$pass',`Confirm`='$cpass' WHERE `sno`='{$_POST['change']}'";
        $run=mysqli_query($con,$sql);
        if($run){
            $_SESSION['sutitle']="Password Edited";
            $_SESSION['sumessage']="Password Edited Successfully!";
            header('location:../fullweb/myprofile.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Error";
            $_SESSION['ermessage']="Password is not Edited Successfully!";
            header('location:../fullweb/myprofile.php');
            exit(0);
        }
    }

    if(isset($_POST['upsubmit'])){
        $sno=$_POST['sno'];
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $phone=$_POST['Phone'];
        $gender=$_POST['Gender'];
        $stu_image = $_FILES['new_image']['name'];
        if ($stu_image != '') {
            $tempname1 = $_FILES['new_image']['tmp_name'];
            $folder1 = "../upload_image/" .$stu_image;
            $a = '';
            if (!empty($_POST['old_image'])) {
                !unlink("../upload_image/" . $_POST['old_image']);
            }
        } else {
            $stu_image = $_POST['old_image'];
            $a = 'true';
        }
        
        $usql="UPDATE `user_sign` SET `Image`='$stu_image',`Username`='$name',`Gender`='$gender',`Phone`='$phone',`Email`='$email' WHERE `sno`='$sno'";
        $run=mysqli_query($con,$usql);
        if($run)
        {
            if($a ==''){
                move_uploaded_file($tempname1,$folder1);
            }
            $_SESSION['sutitle']="Profile Edited";
            $_SESSION['sumessage']="Profile Edited Successfully!";
            header('location:../fullweb/myprofile.php');
            exit(0);
        }else{
            $_SESSION['ertitle']="Error";
            $_SESSION['ermessage']="You cannot upload files of this type!";
            header('location:../fullweb/myprofile.php');
            exit(0);
        }
    } 
?>
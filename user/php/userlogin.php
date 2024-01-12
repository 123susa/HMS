<?php
session_start();
    $con=mysqli_connect('localhost','root','','avhost');

    if(isset($_POST['LOG'])){
        $Email=$_POST['Email'];
        $pass=$_POST['Password'];
        $check="SELECT * FROM `user_sign` WHERE `Email`='$Email' AND `Password`='$pass'";
        $query=mysqli_query($con,$check);
        $nrow=mysqli_num_rows($query);
        if($nrow>0){
            $rows=mysqli_fetch_assoc($query);

            $_SESSION['Email']=$rows['Email'];
            if(!empty($_SESSION['Email'])){
                $_SESSION['sutitle']="Good Luck!";
                $_SESSION['sumessage']="You Are Logged In";
                header('location:../fullweb/index.php');
                exit(0);
            }
        }
        else{
            $_SESSION['ertitle']="Sorry!";
            $_SESSION['ermessage']="Invalid Email OR Password";
            header('location:../web/login.php');
            exit(0);
        }
    }
?>
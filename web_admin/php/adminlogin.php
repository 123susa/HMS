<?php
session_start();
    $con=mysqli_connect('localhost','root','','avhost');

    if(isset($_POST['LOG'])){
        $Email=$_POST['Email'];
        $Depart=$_POST['Dep'];
        $Account=$_POST['Atype'];
        $pass=$_POST['Password'];
        $check="SELECT * FROM `hospital_detail` WHERE `Email`='$Email' AND `Host_dep`='$Depart' AND `Account_type`='$Account' AND `Password`='$pass'";
        $query=mysqli_query($con,$check);
        $nrow=mysqli_num_rows($query);
        if($nrow>0){
            $rows=mysqli_fetch_assoc($query);

            $_SESSION['AEmail']=$rows['Email'];
          
            if(!empty($_SESSION['AEmail'])){
                $_SESSION['sutitle']="Good Luck!";
                $_SESSION['sumessage']="You Are Logged In";
                header('location:../admin/dashboard.php');
                exit(0);
            }
        }
        else{
            $_SESSION['ertitle']="Sorry!";
            $_SESSION['ermessage']="Invalid Email OR Password";
            header('location:../sign/adminlog.php');
            exit(0);
        }
    }
?>
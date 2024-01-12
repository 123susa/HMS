<?php
    session_start();
    $con=mysqli_connect("localhost","root","","avhost");
    if(isset($_SESSION['Email'])){
        $query="UPDATE `user_appointment` SET `Checkb`='2' WHERE `Asno`='{$_POST['cancel']}' AND `Pemail`='{$_SESSION['Email']}'";
        $cres=mysqli_query($con,$query);
        if($cres== true){
            $_SESSION['sutitle']="Canceled";
            $_SESSION['sumessage']="Your appointment is canceled Successfully.";
            header('location:../../fullweb/appoint.php');
            exit(0);
        } 
    }
    // 2 for cancel the appoint from user.
?>
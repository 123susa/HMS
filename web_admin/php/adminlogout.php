<?php
    session_start();

    if(isset($_POST['logout'])){
        unset($_SESSION['AEmail']);

        $_SESSION['sutitle']="Logout";
        $_SESSION['sumessage']="Logout Successfully.";
        header('location:../sign/adminlog.php');
        exit(0);    
    }
?>
<?php
    session_start();

    if(isset($_POST['logout'])){
        unset($_SESSION['Email']);

        $_SESSION['sutitle']="Logout";
        $_SESSION['sumessage']="Logout Successfully.";
        header('location:../web/index.php');
        exit(0);    
    }
?>
<?php
    session_start();
    $con=mysqli_connect("localhost","root","","avhost");
    if(isset($_SESSION['Email'])){
        $query="UPDATE `user_appointment` SET `Checkb`='3' WHERE `Asno`='{$_POST['delete']}' AND `Pemail`='{$_SESSION['Email']}'";
        $cres=mysqli_query($con,$query);
        if($cres== true){
            $_SESSION['sutitle']="Data Deleted";
            $_SESSION['sumessage']="Your appointment history is deleted.";
            header('location:../../fullweb/appoint.php');
            exit(0);
        } 
    }
    // 3 for delete the appoint from user.
?>
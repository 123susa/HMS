<?php
session_start();
    $con=mysqli_connect('localhost','root','','avhost');

    if(!empty($_POST['condel'])){

        $cdels="DELETE FROM `contact` WHERE `sno`={$_POST['condel']}";

        $crun=mysqli_query($con,$cdels);
        if($crun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="User message is deleted!";
            header('location:../admin/message.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="User message is not deleted!";
            header('location:../admin/message.php');
            exit(0);
        }
    }

    if(!empty($_POST['directdel'])){

        $dels="DELETE FROM `head_top` WHERE `sno`={$_POST['directdel']}";

        $drun=mysqli_query($con,$dels);
        if($drun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Data is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Data is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['newdel'])){

        $dels="DELETE FROM `news_data` WHERE `sno`={$_POST['newdel']}";

        $drun=mysqli_query($con,$dels);
        if($drun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="News data is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="News data is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['locatdel'])){

        $dels="DELETE FROM `location` WHERE `sno`={$_POST['locatdel']}";

        $drun=mysqli_query($con,$dels);
        if($drun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Location data is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Location data is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['eventdel'])){

        $dels="DELETE FROM `gallery` WHERE `sno`={$_POST['eventdel']}";

        $drun=mysqli_query($con,$dels);
        if($drun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Data is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Data is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['staffdel'])){

        $appoint="DELETE FROM `user_appointment` WHERE `Doc_id`={$_POST['staffdel']}";
        $leave="DELETE FROM `leave_schedule` WHERE `Doctor_id`={$_POST['staffdel']}";
        $staff="DELETE FROM `hospital_detail` WHERE `sno`={$_POST['staffdel']}";

        $arun=mysqli_query($con,$appoint);
        $leaverun=mysqli_query($con,$leave);
        $srun=mysqli_query($con,$staff);
        if($srun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Staff Data is deleted!";
            header('location:../admin/staff.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Staff Data is not deleted!";
            header('location:../admin/staff.php');
            exit(0);
        }
    }
    if(!empty($_POST['leavedel'])){

        $staff="DELETE FROM `leave_schedule` WHERE `sno`={$_POST['leavedel']}";

        $srun=mysqli_query($con,$staff);
        if($srun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Leave Schedule is deleted!";
            header('location:../admin/leave.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Leave Schedule is not deleted!";
            header('location:../admin/leave.php');
            exit(0);
        }
    }

    if(!empty($_POST['feeddel'])){

        $staff="DELETE FROM `feedback` WHERE `sno`={$_POST['feeddel']}";

        $srun=mysqli_query($con,$staff);
        if($srun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="FeedBack is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Feedback is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['aboutdel'])){

        $about="DELETE FROM `aboutus` WHERE `sno`={$_POST['aboutdel']}";

        $abrun=mysqli_query($con,$about);
        if($srun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="About us content is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="About us content is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }

    if(!empty($_POST['hostdel'])){

        $about="DELETE FROM `hospital_locations` WHERE `sno`={$_POST['hostdel']}";

        $abrun=mysqli_query($con,$about);
        if($srun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Hospital location is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Hospital location is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }
    
    if(!empty($_POST['servicedel'])){

        $service="DELETE FROM `icondetail` WHERE `sno`={$_POST['servicedel']}";

        $svrun=mysqli_query($con,$about);
        if($svrun == true){
            $_SESSION['sutitle']="Deleted!";
            $_SESSION['sumessage']="Service Data is deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Service Data is not deleted!";
            header('location:../admin/editweb.php');
            exit(0);
        }
    }
?>
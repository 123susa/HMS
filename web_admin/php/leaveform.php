<?php
    session_start();
    $con=mysqli_connect("localhost","root","","avhost") or die("connection failed");

    if(isset($_POST["submit"])){
        $dep_id =$_POST['depid'];
        $docid =$_POST['doctorid'];
        $from =$_POST['date1'];
        $to =$_POST['date2'];
        $day =$_POST['days'];
        $time =$_POST['time'];
        $text =$_POST['text'];

        // convert $from and $to in timestam to check if these dates are not before the current date
        $input1Timestamp = strtotime($from);
        $input2Timestamp = strtotime($to);
        $currentdate=strtotime(date("Y-m-d"));

        if($input1Timestamp >= $currentdate && $input2Timestamp >= $currentdate){
            // $_SESSION['msg']='date are after current date';
            // header('location:../schedule_leave.php');
            $qu="INSERT INTO `leave_schedule`(`Dep_id`, `Doctor_id`, `From_Date`, `To_Date`, `Day`, `Time_mode`, `short_m`) VALUES ('$dep_id','$docid','$from','$to','$day','$time','$text')";
            $re=mysqli_query($con,$qu);
            if($re == true){
                $_SESSION['sutitle']="Confirm leave!";
                $_SESSION['sumessage']="Leave Form Successfully Fill.Do not forget to fill check box after come back for your leave.!";
                header('location:../admin/leave.php');
                exit(0);
            }
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']="Date are before current date please fill again.!";
            header('location:../admin/leave.php');
            exit(0);
        }
    }
?>
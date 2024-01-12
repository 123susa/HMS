<?php   session_start();
    $con=mysqli_connect("localhost","root","","avhost");

    if(isset($_POST["submit"])){
            $pname =$_POST["pName"];
            $email =$_POST["pemail"];
            $age =$_POST["age"];
            $phone =$_POST["phone"];
            $dep_id =$_POST["dep"];
            $doc_id =$_POST["docname"];
            $adate  =$_POST["date"];
            $time   =$_POST["tmode"];
        $LS="SELECT * FROM `leave_schedule` WHERE `Dep_id`='$dep_id' AND `Doctor_id`='$doc_id' And `checkcom`='0'";
        $check=mysqli_query($con,$LS);
        $Arow=mysqli_num_rows($check);

        $currentdate=strtotime(date("Y-m-d"));
        $userD=strtotime($adate);

        $i=0;
        if($userD > $currentdate){
            while($Arr = mysqli_fetch_array($check)){
            $FD=$Arr['From_Date'];
            $LD=$Arr['To_Date'];
            $startD=strtotime($FD);
            $endD=strtotime($LD);
            $w='W';
            if($check == true){
                    if($userD >= $startD && $userD <= $endD){
                        if($time == $Arr['Time_mode'] || $w == $Arr['Time_mode']){
                            $Lrow=$Arr['short_m'];
                            $c=1;
                            break;
                        }
                        else{
                            $c= 0;
                        }
                    }
                    
                    else{
                        $c= 0;
                    }
                }
                
            
            }
        }
    }
    else{
        $_SESSION['ertitle']="ERROR";
        $_SESSION['ermessage']= 'Please Select Appropriate Date For Appointment.';
        header('location:../fullweb/appoint.php');
        exit(0);
    }


    if($c==0){
        $apqu="SELECT * FROM `user_appointment` WHERE `Dep_id`='$dep_id' AND `Doc_id`='$doc_id' And `Checkb`='0' AND `Appoint_date`='$adate' AND `Tmode`='$time'";
        $ares=mysqli_query($con,$apqu);
        $arow=mysqli_num_rows($ares);
        if($arow < 20){
            $query="INSERT INTO `user_appointment`(`PatientN`, `Pemail`, `Page`, `Pphone`, `Dep_id`, `Doc_id`, `Tmode`, `Appoint_date`, `checkb`) VALUES ('$pname','$email','$age',$phone,'$dep_id','$doc_id','$time','$adate','0')";
            $result=mysqli_query($con,$query);
            if($result == true){
                $_SESSION['sutitle']= "Your Request Is Confirm";
                $_SESSION['sumessage']="Your Appointment Is Successfully Register";
                header('location:../fullweb/appoint.php');
                exit(0);
            }
        }
        else{
            $_SESSION['ertitle']="Sorry";
            $_SESSION['ermessage']= 'All appointments are already fixed. Please book for next day.';
            header('location:../fullweb/appoint.php');
            exit(0);
        }
    }
    else{
        $_SESSION['ertitle']="Sorry";
        $_SESSION['ermessage']="$Lrow";
        header('location:../fullweb/appoint.php');
        exit(0);
    }
    

?>
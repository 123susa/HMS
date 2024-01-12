<?php
    session_start();
  $con=mysqli_connect('localhost','root','','avhost');

  // 0 for appointment confirm from user.
  // 1 for appointment complete from user.

  $cudate=date('Y-m-d');
  $se="SELECT * FROM `user_appointment` WHERE `Pemail`='{$_SESSION['Email']}' AND `Checkb`='0' AND `Appoint_date` >='$cudate'"; 
  $sre=mysqli_query($con,$se) or die("query invalid");
// for appointment display
  if($sre == true){

    $str="";
    if(mysqli_num_rows($sre)> 0){
      while($row=mysqli_fetch_assoc($sre)){
        $dse="SELECT * FROM `hospital_detail` WHERE `sno`='{$row['Doc_id']}' AND `Host_dep`='{$row['Dep_id']}'";
        $dres=mysqli_query($con,$dse);
        $drow=mysqli_fetch_assoc($dres);

        $Tise="SELECT * FROM `tmode` WHERE `Time_mode`='{$row['Tmode']}'";
        $Tires=mysqli_query($con,$Tise);
        $Tirow=mysqli_fetch_assoc($Tires);
        
        
        $depse="SELECT * FROM `department` WHERE `Dep_id`='{$row['Dep_id']}'";
        $depres=mysqli_query($con,$depse);
        $deprow=mysqli_fetch_assoc($depres);
        

    
        $str.= "<div class='col-md-12'><div class='card mb-3 ml-3'>
              <div class='card-body app'>
              <div>
                <h4 class='card-title text-center title'>Appointment Details</h4>
              </div>
              <div class='app2'>
              <p class='card-text'><b>Patient Name:</b> {$row['PatientN']}</p>
                <p class='card-text'><b>Appointment Date:</b> {$row['Appoint_date']}</p>
                <p class='card-text'><b>Doctor Name:</b> {$drow['Host_Name']}</p>
                <p class='card-text'><b>With:</b> {$deprow['Dep_name']} Doctor</p>
                <form action='../php/ajex/Acancel.php' method='post'>
                  <button class='float-right but' name='cancel' value='{$row['Asno']}'>Cancel</button>
                </form>
              </div>
              <div>
                <p class='card-text text-center'>Appointment In {$Tirow['Ful_name']} Between <b>{$Tirow['Start_time']}</b> to <b>{$Tirow['End_time']}</b>.</p>
              </div>
              </div>
          </div></div>";
      }
      
    }
    else{
      $str= "<p>Sorry, You have no appointment.</p>";
      
    }
    echo $str;
    
  }
  

  


  
?>
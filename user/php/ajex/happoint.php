<?php
    session_start();
  $con=mysqli_connect('localhost','root','','avhost');

  // error_reporting(0);
  $cudate=date('Y-m-d');
  $se="SELECT * FROM `user_appointment` WHERE `Pemail`='{$_SESSION['Email']}' AND `Checkb`!='3'"; 
  $sre=mysqli_query($con,$se) or die("query invalid");
// for appointment display
  if($sre == true){
    $num=1;
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
        
        if($row['checkb'] == 2){
          $status="Cancel";
        }
        else if($row['checkb'] == 1){
          $status="Completed";
        }
        else{
          $status="Pending";
        }

        $str.= "
        <tr>
          <th scope='row'>{$num}</th scope='row'>
          <td>{$row['PatientN']}</td>
          <td> {$row['Appoint_date']}</td>
          <td>{$Tirow['Ful_name']} </td>
          <td>{$Tirow['Start_time']} - {$Tirow['End_time']}</td>
          <td>{$drow['Host_Name']}</td>
          <td>{$deprow['Dep_name']}</td>
          <td>{$status}</td>
          <td><form action='../php/ajex/delete.php' method='post'>
               <button name='delete' value='{$row['Asno']}' class='btn btn-danger'>Delete</button>
             </form>
          </td>
        </tr>";
        $num=$num+1;
        }
        
      }
    echo $str;
  }
  else{
    $_SESSION['mt']="Sorry";
    $_SESSION['mm']="You have no appointment";
    header('location:../../fullweb/appoint.php');
    exit(0);
  }  
?>
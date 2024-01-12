<?php
session_start();
    $con=mysqli_connect('localhost','root','','avhost');

    
    if($_POST['type'] == ''){
        $sql="SELECT * FROM `department` WHERE `Accountid`='2'";

    $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");
    $str ="";
    while($row = mysqli_fetch_assoc($query)){
        
        $str .="<option value='{$row['Dep_id']}'>{$row['Dep_name']}</option>";
    }
    }
    else if($_POST['type'] == "DocData"){
        $sql="SELECT * FROM `hospital_detail` WHERE `Host_dep` = {$_POST['id']}";

        $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");

        $depart="SELECT * FROM `department` WHERE `Dep_id`='{$_POST['id']}'";
        $dquery=mysqli_query($con,$depart) or die("Query Unsuccessful.");
        $drow=mysqli_fetch_assoc($dquery);

        $str ="";
        while($row = mysqli_fetch_assoc($query)){
            //<option value='{$row['sno']}'>{$row['Host_Name']}</option>
            $str .="
            <div class='col-md-3 col-sm-6 doc-card'>
            <div class='card'>
                <div class='doc-photo'>
                    <img src='../image/{$row['Host_Image']}' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                  <h5 class='card-title'>{$row['Host_Name']}</h5>
                  <span class='card-text text-capitalize'>Doctor of {$drow['Dep_name']} Department</span><br>
                  <div class='doc-rate'>
                    <p>Rating : </p>
                    <div>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                    </div>
                </div>
                  
                  <a href='./appoint.php' class='btn btn-primary'>Appointment</a>
                </div>
            </div>
        </div>
            ";
        }
    }


    echo $str;

    
?>
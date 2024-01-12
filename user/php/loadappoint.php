<?php
    $con=mysqli_connect('localhost','root','','avhost');

    if($_POST['type'] == ""){
        $sql="SELECT * FROM department";

        $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");

        $str ="";
        while($row = mysqli_fetch_assoc($query)){
            $str .="<option value='{$row['Dep_id']}'>{$row['Dep_name']}</option>";
        }
    }
    else if($_POST['type'] == "DocData"){
        $sql="SELECT * FROM `hospital_detail` WHERE `Host_dep` = {$_POST['id']}";

        $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");

        $str ="";
        while($row = mysqli_fetch_assoc($query)){
            $str .="<option value='{$row['sno']}'>{$row['Host_Name']}</option>";
        }
    }

    echo $str;
?>
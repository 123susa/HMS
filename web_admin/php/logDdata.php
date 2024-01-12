<?php 

    $con = mysqli_connect('localhost','root','','avhost') or die ("connection failed.");

    $sql="SELECT * FROM department";

    $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");
    $str ="";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['Dep_id']}'>{$row['Dep_name']}</option>";
    }

    echo $str;
?>
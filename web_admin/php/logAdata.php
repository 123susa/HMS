<?php
    $con=mysqli_connect('localhost','root','','avhost');

    $sql="SELECT * FROM accounttype_detail";

    $query=mysqli_query($con,$sql) or die("Query Unsuccessful.");
    $str ="";
    while($row = mysqli_fetch_assoc($query)){
        $str .="<option value='{$row['sno']}'>{$row['Account_type']}</option>";
    }

    echo $str;
?>
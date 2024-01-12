<?php
    $con=mysqli_connect('localhost','root','','avhost');
    //index page query
        //top para query
    $direct="SELECT * FROM `head_top` ORDER BY `created` DESC LIMIT 1";
    $ddres=mysqli_query($con,$direct);
    $ddrow=mysqli_fetch_assoc($ddres);
        //feedback query
    $feed="SELECT * FROM `feedback` WHERE `checked`='1' ORDER BY `created` DESC LIMIT 2";
    $feedres=mysqli_query($con,$feed);
        //service query
    $service="SELECT * FROM `icondetail` ORDER BY `created` DESC LIMIT 3";
    $serviceres=mysqli_query($con,$service);

    // about us query
        //doctor query
    $doc="SELECT * FROM `hospital_detail` WHERE `Account_type`=2 LIMIT 3";
    $docres=mysqli_query($con,$doc);
        //icon location query
    $location="SELECT * FROM `location`";
    $lres=mysqli_query($con,$location);

    // common in all pages
        // 1 sign in query
    $q="SELECT * FROM `user_sign` WHERE `Email`='{$_SESSION['Email']}'";
    $res=mysqli_query($con,$q);
    $row=mysqli_fetch_assoc($res);
        // 2 news query
    $news="SELECT * FROM `news_data` ORDER BY `sno` DESC LIMIT 4";
    $nres=mysqli_query($con,$news);
        // 3 about us query
    $aboutus="SELECT * FROM `aboutus` ORDER BY `created` DESC LIMIT 1";
    $aboutusres=mysqli_query($con,$aboutus);
        // 4 address query
    $hostadd="SELECT * FROM `hospital_locations` ORDER BY `created` DESC LIMIT 1";
    $hostaddres=mysqli_query($con,$hostadd);

?>
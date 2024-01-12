<?php
  session_start();
  
  if (isset($_SESSION["Email"])){
    include('../php/all_query.php');
  }
  else{
    $_SESSION['ertitle']="Login";
    $_SESSION['ermessage']="Please Login First";
    header('location:../web/login.php');
    exit(0);
  }
  
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="icon" type="image/x-icon" href="../image/logo.webp">
    <link rel="stylesheet" href="../css/index.css">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/d0295a5f3b.js" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <section class="con">
        <div class="container">
            <div class="row">
                <div class="calling col-sm-6">
                    <div class="row">
                        <?php $phone=mysqli_query($con,$hostadd);
    $pho=mysqli_fetch_row($phone);?>
                        <div class="call col-sm-6">
                            <div class="logo">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="para">
                                <span class="head">Phone</span>
                                <span class="num"><?php echo $pho[3];?></span>
                            </div>
                        </div>
                        <div class="call col-sm-6">
                            <div class="logo">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="para">
                                <span class="head">Emergence</span>
                                <span class="num"><?php echo $pho[4];?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newing col-md-6">
                    <div class="new1">
                        <span class="head2">Current News:</span>
                        <a href="about.php">More Update's</a>
                    </div>
                    <div class="new2">
                        <marquee behavior="scroll" direction="up" scrollamount="1" style="height: 25px;"><?php 
                            $cres=mysqli_query($con,$news);
                            $cur=mysqli_fetch_row($cres);  echo $cur[3];?></marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="con1">
        <div class="container-fluid">
            
                <nav class="navbar navbar-expand-md">
                    <div class="navbar-brand">
                        <img src="../image/logo.webp" alt="image">
                        <span class="mx-3">Av Hospital</span>
                    </div>
                    <button class="navbar-toggler mx-5" data-toggle="collapse" data-target="#mynav">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="mynav">
                        <ul class="navbar-nav align-items-baseline mx-3 my-2">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link">Event's</a>
                            </li>
                            <li class="nav-item">
                                <a href="doctor.php" class="nav-link">Doctor's</a>
                            </li>
                            <li class="nav-item">
                                <a href="appoint.php" class="nav-link">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile">
                        <div class="dropdown">
                            <img src="../upload_image/<?php echo $row['Image'];?>" alt="person image">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span style="text-transform: capitalize;"><?php echo $row['Username'];?></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="myprofile.php">   
                                    <div class="inline-line">
                                        <span class="material-symbols-outlined">settings</span>
                                        <p>My profile</p>
                                    </div>
                                </a>
                                <form action="../php/userlogout.php" method="post">
                                    <button class="dropdown-item" name="logout">
                                        <div class="inline-line">
                                            <span class="material-symbols-outlined">logout</span>
                                            <p>Logout</p>
                                        </div>
                                    </button>
                                </form>
                            </div>
                          </div>
                    </div>
                </nav>
        </div>
    </header>
    <main>
        <!-- banner style -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-title mt-5">
                            <h1><?php echo $ddrow['Head_name'];?></h1>
                            <h5><?php echo $ddrow['Head_position'];?></h5>
                            <p><?php echo $ddrow['Head_content'];?></p>
                        </div>
                        <div class="appoint">
                            <a href="appoint.php" class="btn btn-primary">Appointment</a>
                            <a href="doctor.php" class="btn btn-secondary">View Doctor's</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img float-lg-right m-md-5">
                            <img src="../image/<?php echo $ddrow['Head_img'];?>" alt="ndjsnjdnsjdnk"  class="w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- services -->
    <div class="container secti">
        <div class="row">
            <div class="col-md-12">
                <h2 class="secti-head">Our Services & Facilities</h2>
            </div>
            <?php
            while($servicerow=mysqli_fetch_assoc($serviceres)){
                echo "<div class='col-sm-6 col-md-4'>
                <div class='service-box'>
                    <i class='material-symbols-outlined'>{$servicerow['iconName']}</i>
                    <h3>{$servicerow['name']}</h3>
                    <p>{$servicerow['para']} </p>
                </div>
            </div>";
            }
            ?>
            
            <div class="ser col text-center">
                <a href="about.php" class="btn btn-warning">More About Us</a>
            </div>
        </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials secti">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2 class="secti-head">Testimonials</h2></div>
                <?php
                    $n=1;
                    while($feedrow=mysqli_fetch_assoc($feedres)){
                        $fq="SELECT * FROM `user_sign` WHERE `Email`='{$feedrow['Useremail']}'";
                        $fres=mysqli_query($con,$fq);
                        $frow=mysqli_fetch_assoc($fres);
                        echo "
                    <div class='col-md-6 test'>
                        <div class='testimonal'>
                            <p>{$feedrow['Feedback']}</p>
                            <img src='../image/{$frow['Image']}' alt=''>
                            <div class='patient'>{$feedrow['Useremail']}</div>
                            <div class='patient-dp'>Patient</div>
                        </div>
                </div>
                    
                    ";
                        $n++;
                    }
                ?>
                
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="container news secti">
        <div class="row">
            <div class="col-md-12"><h2 class="secti-head">Recent News</h2></div>
        
            <?php 
                while($nrow=mysqli_fetch_assoc($nres)){
                    echo "<div class='col-md-6 col-lg-3 mb-2'>
                    <div class='news-post'>
                        <div class='newsimg'><img src='../image/{$nrow['News_img']}' alt=''></div>
                        <p class='head'><a href='events.php'>{$nrow['News_heading']}</a></p>
                        <div class='post-date'><i class='material-symbols-outlined'>calendar_month</i>{$nrow['News_date']} </div>
                        <marquee behavior='scroll' direction='up' scrollamount='3' class='post-data'><p>{$nrow['News_text']}</p></marquee>
                        <a href='events.php' class='readmore'>Read More<i class='material-symbols-outlined'>double_arrow</i></a>
                    </div>
                </div>";
                }
            ?>
            
        </div>
    </div>
</main>

 <!-- footer -->
 <div class="footer-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                <?php
                    $aboutrow=mysqli_fetch_assoc($aboutusres);
                    echo "<h4>{$aboutrow['AboutHead']}</h4>
                    <p>{$aboutrow['AboutPara1']}</p>
                    <p>{$aboutrow['AboutPara2']}</p>
                ";
                    
                ?>
                
                    </div>
            </div>
            
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                    <h4>Hospital Location</h4>
                    <address>
                    <?php
                    $hostrow=mysqli_fetch_assoc($hostaddres);
                    echo "
                    <p>{$hostrow['LoactionAddress']}</p>
                    <p>phone : {$hostrow['HospitalPhone']}</p>
                    <p>Emergency : {$hostrow['HospitalEmerg']}</p>
                    ";
                    ?>
                    
                        
                    </address>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                    <form action="../php/feedback.php" method="post">
                        <h4>FeedBack Box</h4>
                        <div class="input-group mb-2">
                            <input type="email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" name="femail" value="<?php echo $row['Email'];?>" readonly>
                            <div class="input-group-text bg-primary text-white" id="email" required>
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <textarea cols="5" rows="6" class="form-control form-control-lg bg-light fs-6" aria-describedby="msg" name="ftext" placeholder="Short message for patients" required></textarea>
                            <div class="input-group-text bg-primary text-white" id="msg" >
                                <span class="material-symbols-outlined">message</span>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Submit" name="submit" class="btn btn-outline-warning me-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 par">Copyright@2023 Av Hospital</div>
            <div class="col-md-6">
                <ul class="social-icons float-md-right">
                    <li><a href="#" ><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#" ><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#" ><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <!-- bootstrap js -->
    
    <script rel="stylesheet" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script rel="stylesheet" src="https://cdn.jsdelivr.net/npm/pooper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <?php
if(!empty($_SESSION['Email'])){
    include('../php/message.php');
}
?>
</body>
</html>
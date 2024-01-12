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
    <title>contact page</title>
    <link rel="icon" type="image/x-icon" href="../image/logo.webp">
    <link rel="stylesheet" href="../css/index.css">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/d0295a5f3b.js" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
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
                                <a href="index.php" class="nav-link">Home</a>
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
                                <a href="contact.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Contact Us</a>
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
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 cont-col">
                        <h3>Send a Message</h3>
                        
                        <form action="../php/usercontact.php" method="post" class="cont-form">
                            
                            <div class="input-group mb-2">
                                <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" aria-describedby="names"  placeholder="Fullname" required>
                                <div class="input-group-text bg-primary text-white" id="names">
                                    <i class="material-symbols-outlined">account_circle</i>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" name="email" value="<?php echo $row['Email'];?>" readonly>
                                <div class="input-group-text bg-primary text-white" id="email" >
                                <span class="material-symbols-outlined">mail</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="tel" class="form-control form-control-lg bg-light fs-6" aria-describedby="phone" name="phone" placeholder="Phone number" required>
                                <div class="input-group-text bg-primary text-white" id="phone" >
                                    <span class="material-symbols-outlined">phone</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <textarea cols="30" rows="6" class="form-control form-control-lg bg-light fs-6" aria-describedby="msg" name="msg" placeholder="Message" required></textarea>
                                
                                <div class="input-group-text bg-primary text-white" id="msg" >
                                    <span class="material-symbols-outlined">message</span>
                                </div>
                            </div>
                            
                            <input type="submit" name="submit" class="btn btn-danger" value="SEND">
                        </form>
                    </div>
                    <div class="col-md-6 contact-col">
                        <div class="row">
                            <div class="col-md-12 cont-col2">
                                <h3>Contact Info</h3>
                                <div>
                                    <?php
                                    $hostrow=mysqli_fetch_assoc($hostaddres);
                                    ?>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-house"></i>
                                        </div>
                                        <span><?php echo "{$hostrow['LoactionAddress']}";?></span>
                                    </div>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <span><?php echo "{$hostrow['HospitalEmail']}";?></span>
                                    </div>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <span>+91 <?php echo "{$hostrow['HospitalPhone']}";?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114306.49103892352!2d74.55331102498326!3d26.453219567286776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be6d8fcb7cd01%3A0xcbaf8f12eb8100ee!2sAjmer%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1700505040269!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

include('../php/message.php');

?>
</body>
</html>
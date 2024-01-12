<?php
  session_start();
  
  if (isset($_SESSION["Email"])){
    $con=mysqli_connect('localhost','root','','avhost');

    $q="SELECT * FROM `user_sign` WHERE `Email`='{$_SESSION['Email']}'";
    $res=mysqli_query($con,$q);
    $row=mysqli_fetch_assoc($res);

    $news="SELECT * FROM `news_data` ORDER BY `sno` DESC LIMIT 4";
    $nres=mysqli_query($con,$news);

    $even="SELECT * FROM `gallery`";
    $evenres=mysqli_query($con,$even);

    $aboutus="SELECT * FROM `aboutus` ORDER BY `created` DESC LIMIT 1";
    $aboutusres=mysqli_query($con,$aboutus);

    $hostadd="SELECT * FROM `hospital_locations` ORDER BY `created` DESC LIMIT 1";
    $hostaddres=mysqli_query($con,$hostadd);
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
    <title>Event page</title>
    <link rel="icon" type="image/x-icon" href="../image/logo.webp">
    <link rel="stylesheet" href="../css/index.css">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/d0295a5f3b.js" crossorigin="anonymous"></script>
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
                                <a href="events.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Event's</a>
                            </li>
                            <li class="nav-item">
                                <a href="doctor.php" class="nav-link">Doctor's</a>
                            </li>
                            <li class="nav-item">
                                <a href="appoint.php" class="nav-link">Appointment</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="Prescription.php" class="nav-link">Prescription</a>
                            </li> -->
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a href="contact.php" class="nav-link">Payment</a>
                            </li> -->
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
        </div>
    </header>

    <main>
        <section class="event">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 event-head">
                        <h1 >Upcoming Events</h1>
                    </div>
                    <div class="col-md-6 event-link">
                        <button class="btn btn-outline-danger active">Daily Events</button>
                        <button class="btn btn-outline-secondary">Weekly Events</button>
                        <button class="btn btn-outline-primary">Montly Events</button>
                    </div>
                    <div class="col event-daily">
                        <h3>Daily Events</h3>
                        <div class="event-box">
                            <div class="row">
                                <div class="col-lg-6 events-img">
                                    <img src="../image/yoga.jpeg" class="yoga" alt="yoga">
                                </div>
                                <div class="col-lg-6">
                                    <h4>Morning & Evening Yoga</h4>
                                    <h5>Morning Timing : 9:00 AM to 10:00 AM</h5>
                                    <h5>Afternoon Timing : 5:00 PM to 6:00 PM</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique est magnam ipsum quaerat molestiae ducimus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row memory">
                    <div class="col-sm-12">
                        <h3>Our Memories</h3>
                    </div>
                    <div class="col-sm-12 memory-img">
                        <marquee behavior="alternate" direction="left" scrollamount="10" class="">
                            <?php
                                while($evenrow=mysqli_fetch_assoc($evenres)){
                                    echo "<img src='../image/{$evenrow['Img1']}' alt='....'>
                                    <img src='../image/{$evenrow['Img2']}' alt='....'>
                                    <img src='../image/{$evenrow['Img3']}' alt='....'>";
                                }
                            ?>
                            <!-- <img src="../image/pyoga.jpeg" alt="">
                            <img src="../image/pyoga2.jpeg" alt="">
                            <img src="../image/pyoga3.webp" alt="">
                            <img src="../image/pyoga4.jpeg" alt=""> -->
                        </marquee>
                    </div>
                    <div class="col-sm-12 event-daily2">
                        <div class="row">
                            <div class="col-md-6 ">
                                <h4>Healthy Diet Planning With Experts</h4>
                                <h5>Every Afternoon 2:00 PM</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae animi culpa dicta cum, reprehenderit sint!</p>
                            </div>
                            <div class="col-md-6 events-img2">
                                <img src="../image/diet.webp" alt="diet">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="News">
            <div class="container">
                <div class="row">
                    <h1>News</h1>
                    <?php 
                while($nrow=mysqli_fetch_assoc($nres)){
                    echo "<div class='col-md-12 new-box'>
                    <div class='row'>
                        <div class='col-md-3'>
                            <img src='../image/{$nrow['News_img']}' alt='news' width='50px' height='50px'>
                        </div>
                        <div class='col-md-7'>
                            <span>Date:{$nrow['News_date']}</span>
                            <p>{$nrow['News_heading']}</p>
                            <p>{$nrow['News_text']}</p>
                        </div>
                        <div class='col-md-2'>
                            <button class='btn btn-info'>Read More</button>
                        </div>
                    </div>
                </div>";
                }?>
                    <!-- <div class="col-md-12 new-box">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../image/logo.webp" alt="news" width="50px" height="50px">
                            </div>
                            <div class="col-md-7">
                                <span>Date:12/34/2023</span>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat earum obcaecati laudantium id, quis voluptatibus?</p>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info">Read More</button>
                            </div>
                        </div>
                    </div> -->

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


</body>
</html>
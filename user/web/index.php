<?php
    session_start();
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <section class="con">
        <div class="container">
            <div class="row">
                <div class="calling col-sm-6">
                    <div class="row">
                        <div class="call col-sm-6">
                            <div class="logo">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="para">
                                <span class="head">Phone</span>
                                <span class="num">9876542342</span>
                            </div>
                        </div>
                        <div class="call col-sm-6">
                            <div class="logo">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="para">
                                <span class="head">Emergence</span>
                                <span class="num">0145-262626</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newing col-md-6">
                    <div class="new1">
                        <span class="head2">Current News:</span>
                        <a href="#">More Update's</a>
                    </div>
                    <div class="new2">
                        <marquee behavior="scroll" direction="up" scrollamount="1" style="height: 25px;">today i am in a good mood Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis labore minus consequuntur repellendus error quasi magnam, iusto deserunt architecto fugiat nulla voluptas adipisci. Libero recusandae veniam iusto quod placeat quia?</marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="con1">
        <div class="container">
            
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
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="log btn btn-warning">
                        <a href="login.php">Sign In</a>
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
                            <h1>Mahendar singh</h1>
                            <h5>Director of Hospital</h5>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui voluptatem illo numquam assumenda molestiae id rerum, obcaecati facilis illum omnis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minima dolores vitae autem, aut corporis consectetur repellendus, ab est eius blanditiis suscipit ad molestias quod dolorem itaque voluptatum hic sequi?</p>
                        </div>
                        <div class="appoint">
                            <a href="#" class="btn btn-primary">Appointment</a>
                            <a href="#" class="btn btn-secondary">View Doctor's</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img float-lg-right m-md-5">
                            <img src="../image/director.jpeg" alt="ndjsnjdnsjdnk"  class="w-75">
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
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="material-symbols-outlined">meeting_room</i>
                    <h3>Hospital Room</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus provident necessitatibus iste minus? </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="material-symbols-outlined">
                        precision_manufacturing</i>
                    <h3>Advance Technology</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="service-box">
                    <i class="material-symbols-outlined">
                        airport_shuttle</i>
                    <h3>Transportation service</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus provident necessitatibus</p>
                </div>
            </div>
            <div class="ser col text-center">
                <a href="#" class="btn btn-warning">More About Service's</a>
            </div>
        </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials secti">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2 class="secti-head">Testimonials</h2></div>
                <div class="col-md-6 test">
                    <div class="testimonal">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus est blanditiis perspiciatis dolor, expedita consequuntur saepe eius sit odio beatae?</p>
                        <img src="../image/ansh.jpeg" alt="">
                        <div class="patient">Anshika</div>
                        <div class="patient-dp">Cardiology patient</div>
                    </div>
                </div>
                <div class="col-md-6 test">
                    <div class="testimonal">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus est blanditiis perspiciatis dolor, expedita consequuntur saepe eius sit odio beatae?</p>
                        <img src="../image/ansh.jpeg" alt="">
                        <div class="patient">kajal</div>
                        <div class="patient-dp">Cardiology patient</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="container news secti">
        <div class="row">
            <div class="col-md-12"><h2 class="secti-head">Recent News</h2></div>
        
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src="../image/d-patient.jpg" alt="">
                    <h3><a href="#"></a>News Heading Here</h3>
                    <div class="post-date"><i class="material-symbols-outlined">calendar_month</i>April 30,2023 </div>
                    <marquee behavior="scroll" direction="up" scrollamount="3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus in sequi laudantium?</p></marquee>
                    <a href="#" class="readmore">Read More<i class="material-symbols-outlined">double_arrow</i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src="../image/d-patient.jpg" alt="">
                    <h3><a href="#"></a>News Heading Here</h3>
                    <div class="post-date"><i class="material-symbols-outlined">calendar_month</i>April 30,2023 </div>
                    <marquee behavior="scroll" direction="up" scrollamount="3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus in sequi laudantium?</p></marquee>
                    <a href="#" class="readmore">Read More<i class="material-symbols-outlined">double_arrow</i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src="../image/d-patient.jpg" alt="">
                    <h3><a href="#"></a>News Heading Here</h3>
                    <div class="post-date"><i class="material-symbols-outlined">calendar_month</i>April 30,2023 </div>
                    <marquee behavior="scroll" direction="up" scrollamount="3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus in sequi laudantium?</p></marquee>
                    <a href="#" class="readmore">Read More<i class="material-symbols-outlined">double_arrow</i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="news-post">
                    <img src="../image/d-patient.jpg" alt="">
                    <h3><a href="#"></a>News Heading Here</h3>
                    <div class="post-date"><i class="material-symbols-outlined">calendar_month</i>April 30,2023 </div>
                    <marquee behavior="scroll" direction="up" scrollamount="3"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus in sequi laudantium?</p></marquee>
                    <a href="#" class="readmore">Read More<i class="material-symbols-outlined">double_arrow</i></a>
                </div>
            </div>
        </div>
    </div>
</main>

 <!-- footer -->
 <div class="footer-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                    <h4>About Hospital</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, praesentium.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet recusandae, sapiente deleniti a esse vel omnis dolorem voluptas atque architecto.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                    <h4>Latest News</h4>
                    <ul class="latest-news">
                        <li><a href=""><i class="material-symbols-outlined">double_arrow</i>Lorem ipsum dolor sit amet consectetur.</a></li>
                        <li><a href=""><i class="material-symbols-outlined">double_arrow</i>Lorem ipsum dolor sit amet consectetur.</a></li>
                        <li><a href=""><i class="material-symbols-outlined">double_arrow</i>Lorem ipsum dolor sit amet consectetur.</a></li>
                        <li><a href=""><i class="material-symbols-outlined">double_arrow</i>Lorem ipsum dolor sit amet consectetur.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="footer-widget">
                    <h4>Hospital Location</h4>
                    <address>
                        <p>plot 102,<br> Panchshil Jaipur Road<br>, Ajmer (305001) INDIA</p>
                        <p>phone : 9876542342</p>
                        <p>Emergency : 0145-262626</p>
                    </address>
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
if(empty($_SESSION['Email'])){
    if(!empty($_SESSION['sumessage'])){
        // echo "<script>alert('".$_SESSION['message']."');</script>";
        echo "<script>
                Swal.fire({
                    title: '{$_SESSION['sutitle']}',
                    text: '{$_SESSION['sumessage']}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
              </script>";
        $_SESSION['sutitle']=null;
        $_SESSION['sumessage']=null;
    }
    if(!empty($_SESSION['ermessage'])){
        // echo "<script>alert('".$_SESSION['message']."');</script>";
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: '{$_SESSION['ertitle']}',
                    text: '{$_SESSION['ermessage']}',
                    confirmButtonText: 'OK'
                  });
              </script>";
        $_SESSION['ertitle']=null;
        $_SESSION['ermessage']=null;
    }
}
?>

</body>
</html>
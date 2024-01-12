<?php
    session_start();
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
                                <a href="contact.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Contact Us</a>
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
        <section class="contact">
            <div class="container">
                <!-- <h1>Get in Touch</h1> -->
                <div class="row">
                    <div class="col-md-6 cont-col">
                        <h3>Send a Message</h3>
                        <form action="" class="cont-form">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="cont-line">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Phone no.</label>
                                    <input type="tel" maxlength="10" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="" cols="30" rows="6" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-danger">SEND</button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-col">
                        <div class="row">
                            <div class="col-md-12 cont-col2">
                                <h3>Contact Info</h3>
                                <div>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-house"></i>
                                        </div>
                                        <span>plot 102, Panchshil Jaipur Road, Ajmer (305001) INDIA</span>
                                    </div>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <span>hospitalav@gmail.com</span>
                                    </div>
                                    <div class="cont-phone">
                                        <div class="ic">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <span>+91 9876542342</span>
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
</body>
</html>
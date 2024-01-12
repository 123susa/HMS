<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us page</title>
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
                                <a href="about.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">About Us</a>
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
        <section class="ab">
            <div class="container">
                <div class="row">
                    <div class="col about">
                        <h1> About Us</h1>
                        
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae eveniet velit quia ipsa dolores quam saepe, dolorum dignissimos facere exercitationem!</p>
                    </div>
                </div>
            </div><hr>
            
        </section>

        <!-- doctor -->
        <div class="container-fliud">
            <div class="row doc">
                <div class="col-md-6 doc-img">
                    <img src="../image/doctor_ic.jpg" alt="doctor image">
                </div>
                <div class="col-md-6 doc-para">
                    <h2 class="word"></h2>
                    <h1>our doctor's</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit..</p>

                    <div class="dcard">
                        <div class="card dcard-card">
                            <img src="../image/ansh.jpeg" width="45px" height="45px" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Doctor Name</h5>
                              <p class="card-text">Department Name</p>
                              <a href="#" class="btn btn-primary">Know More</a>
                            </div>
                        </div>
                        <div class="card dcard-card">
                            <img src="../image/ansh.jpeg" width="45px" height="45px" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Doctor Name</h5>
                              <p class="card-text">Department Name</p>
                              <a href="#" class="btn btn-primary">Know More</a>
                            </div>
                        </div>
                        <div class="card dcard-card">
                            <img src="../image/ansh.jpeg" width="45px" height="45px" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Doctor Name</h5>
                              <p class="card-text">Department Name</p>
                              <a href="#" class="btn btn-primary">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- location -->
        <section class="secti2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="row flex-sm-column">
                        <div class="col-md-12"><span>LOCATION</span>
                            <h2 class="font-weight-bold locat"></h2>
                            <p>AV Hospaital is the Best Hospital in India with over 10,000 beds across 73 hospitals, 5000+
                                Pharmacies, over 40 Hospitals, 100+ Diagnostic Rooms nad 200+ Telemedicine units.</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 text-center locatimg">
                                <img src="../image/delhi.png" alt="">
                                <h5 class="font-weight-bold">Delhi</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center locatimg">
                                <img src="../image/hyfrabad.png" alt="">
                                <h5 class="font-weight-bold">Hydrabad</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center locatimg">
                                <img src="../image/jaipur.png" alt="">
                                <h5 class="font-weight-bold">Jaipur</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center locatimg">
                                <img src="../image/mp.png" alt="">
                                <h5 class="font-weight-bold">Madhya Pradesh</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center locatimg">
                                <img src="../image/raj.png" alt="">
                                <h5 class="font-weight-bold">Mumbai</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 image-i">
                    <img src="../image/hospital.webp" alt="//" class="image">
                    <h2>Hospitals In Jaipur</h2>
                    <p><i class="material-symbols-outlined">location_on</i>Plot no.-4279 ndfbjksbafj,foy sagar road, ajmer
                    </p>
                    <p><i class="material-symbols-outlined">phone</i>9876546732</p>
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

    <script>
        var words = ["Lets started with knowing "],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});
    </script>
    <!-- location -->
    <script>
            var locats = ["Hospitals In India "],
    lpart,
    i = 0,
    loffset = 0,
    llen = locats.length,
    lforwards = true,
    lskip_count = 0,
    lskip_delay = 15,
    lspeed = 70;
var locatflick = function () {
  setInterval(function () {
    if (lforwards) {
      if (loffset >= locats[i].length) {
        ++lskip_count;
        if (lskip_count == lskip_delay) {
          lforwards = false;
          lskip_count = 0;
        }
      }
    }
    else {
      if (loffset == 0) {
        lforwards = true;
        i++;
        loffset = 0;
        if (i >= llen) {
          i = 0;
        }
      }
    }
    lpart = locats[i].substr(0, loffset);
    if (lskip_count == 0) {
      if (lforwards) {
        loffset++;
      }
      else {
        loffset--;
      }
    }
    $('.locat').text(lpart);
  },lspeed);
};

$(document).ready(function () {
  locatflick();
});
    </script>
</body>
</html>
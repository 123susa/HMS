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
                                <a href="events.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Event's</a>
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
                        <marquee behavior="alternate" direction="left" scrollamount="10">
                            <img src="../image/pyoga.jpeg" alt="">
                            <img src="../image/pyoga2.jpeg" alt="">
                            <img src="../image/pyoga3.webp" alt="" width="400px">
                            <img src="../image/pyoga4.jpeg" alt="" width="400px" height="300px">
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
                    <div class="col-md-12 new-box">
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
                    </div>
                    <div class="col-md-12 new-box">
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
                    </div>
                    <div class="col-md-12 new-box">
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
                    </div>
                    <div class="col-md-12 new-box">
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
                    </div>
                    <div class="col-md-12 new-box">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../image/logo.webp" alt="news" width="50px" height="50px">
                            </div>
                            <div class="col-md-7">
                                <span>Date:12/34/2023</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quas, tenetur odit maiores laudantium necessitatibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quam, non consequatur voluptas reprehenderit architecto quae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat earum obcaecati laudantium id, quis voluptatibus?</p>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info">Read More</button>
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
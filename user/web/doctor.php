

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's page</title>
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
                                <a href="doctor.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Doctor's</a>
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
        <section class="brand-doc">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row brand-banner">
                            <div class="col-md-6 banner-text">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Find a doctor</h1>
                                        <h1>& book online</h1>
                                        <p>Easily book a doctor anywhere in the world...</p>
                                    </div>
                                    <div class="col-md-12 search-doc">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="search" class="form-control" placeholder="search department">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary">Search Doctor</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12 rating">
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <p>Five star rating on </p>
                                        <img src="../image/logo.webp" alt="logo">
                                        <p>Av Hospital</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-6 banner-img">
                                <img src="../image/doctors.jpg" alt="doctro">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 doc-but">
                        <button class="btn btn-success">All</button>
                        <button class="btn btn-outline-success">Cardiology</button>
                        <button class="btn btn-outline-success">Neurology</button>
                        <button class="btn btn-outline-success">Orthopaedic</button>
                        <button class="btn btn-outline-success">Gynecology</button>
                        <button class="btn btn-outline-success">Radiology</button>
                        <button class="btn btn-outline-success">Gastroenterology</button>
                        <button class="btn btn-outline-success">Dermatology</button>
                        <button class="btn btn-outline-success">Nephrology</button>
                        <button class="btn btn-outline-success">ophthalmology</button>
                    </div>
                    <div class="col-md-12 doc-detail">
                        <div class="doc-head">
                            <span class="material-symbols-outlined">
                                cardiology
                                </span>
                            <h1>Department name</h1>
                        </div>
                        <div class="row doc-cards">
                            <div class="col-md-3 col-sm-6 doc-card">
                                <div class="card">
                                    <div class="doc-photo">
                                        <img src="../image/ansh.jpeg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">Meenashi Sharma</h5>
                                      <span class="card-text">Surgeon</span><br>
                                      <span class="card-text">Cardiology Department</span>
                                      <div class="doc-rate">
                                        <p>Rating : </p>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                      
                                      <a href="#" class="btn btn-primary">Appointment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 doc-card">
                                <div class="card">
                                    <div class="doc-photo">
                                        <img src="../image/ansh.jpeg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">Meenashi Sharma</h5>
                                      <span class="card-text">Surgeon</span><br>
                                      <span class="card-text">Cardiology Department</span>
                                      <div class="doc-rate">
                                        <p>Rating : </p>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                      
                                      <a href="#" class="btn btn-primary">Appointment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 doc-card">
                                <div class="card">
                                    <div class="doc-photo">
                                        <img src="../image/ansh.jpeg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">Meenashi Sharma</h5>
                                      <span class="card-text">Surgeon</span><br>
                                      <span class="card-text">Cardiology Department</span>
                                      <div class="doc-rate">
                                        <p>Rating : </p>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                      
                                      <a href="#" class="btn btn-primary">Appointment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 doc-card">
                                <div class="card">
                                    <div class="doc-photo">
                                        <img src="../image/ansh.jpeg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                      <h5 class="card-title">Meenashi Sharma</h5>
                                      <span class="card-text">Surgeon</span><br>
                                      <span class="card-text">Cardiology Department</span>
                                      <div class="doc-rate">
                                        <p>Rating : </p>
                                        <div>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                      
                                      <a href="#" class="btn btn-primary">Appointment</a>
                                    </div>
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
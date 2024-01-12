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
                        <?php $phone=mysqli_query($con,$hostadd);$pho=mysqli_fetch_row($phone);?>
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
                                <a href="about.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">About Us</a>
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
        <section class="ab">
            <div class="container">
                <div class="row">
                    <div class="col about">
                        <h1> About Us</h1>
                        <?php
                    $aboutrow=mysqli_fetch_assoc($aboutusres);
                    echo "
                    <p>{$aboutrow['AboutPara1']}</p>"
                    ?>
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
                        <?php
                            
                            while($docrow=mysqli_fetch_assoc($docres)){
                                $depart="SELECT * FROM `department` WHERE `Dep_id`='{$docrow['sno']}'";
                                $depres=mysqli_query($con,$depart);
                                $deprow=mysqli_fetch_assoc($depres);
                                echo "
                                <div class='card dcard-card'>
                            <img src='../image/{$docrow['Host_Image']}' width='45px' height='45px' alt='...' class='mt-3'>
                            <div class='card-body'>
                              <h6 class='card-title'>{$docrow['Host_Name']}</h6>
                              <p class='card-text'>{$deprow['Dep_name']}</p>
                              <a href='doctor.php' class='btn btn-primary'>Know More</a>
                            </div>
                        </div>
                                ";
                            }
                        ?>
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
                        <?php
                        while($locatrow=mysqli_fetch_assoc($lres)){
                            echo "
                            <div class='col-md-4 col-sm-6 text-center locatimg'>
                            <img src='../image/{$locatrow['locationimg']}' alt=''>
                            <h5 class='font-weight-bold'>{$locatrow['locationname']}</h5>
                        </div>";
                        }
                        ?>
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
                <?php
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
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
    <title>profile page</title>
    <link rel="icon" type="image/x-icon" href="../image/logo.webp">
    <link rel="stylesheet" href="../css/index.css">

    <style>
        .profile-detail h1{
            color: #031163;
        }
        .profile-detail img{
            width: 250px;
            height: 250px;border-radius: 50%;
            position: relative;
            top: 20px;
            left: 20px;
        }
        .profile-detail .profile-img{
            
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border: 5px solid blueviolet;
        }
        .profile-text{
            margin-left: 40px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* inline */
.inline-line{
    display: flex;
  }
  
  @media screen and (max-width:768px) {
    .inline-line{
      display: flex;
      flex-direction: column;
    }
  }
  .image{
    width: 100px;
    height: 100px;
  }
  .image img{
    width: 70px;
    height: 70px;
  }
    </style>
    
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
                        <a href="about.php">More Update's</a>
                    </div>
                    <div class="new2">
                        <marquee behavior="scroll" direction="up" scrollamount="1" style="height: 25px;">today i am in a good mood Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis labore minus consequuntur repellendus error quasi magnam, iusto deserunt architecto fugiat nulla voluptas adipisci. Libero recusandae veniam iusto quod placeat quia?</marquee>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 mb-2 p-2">
                    <button class="btn btn-outline-success m-2" onclick="showDiv('profile');hideDiv('edit');hideDiv('changepass');">My Profile</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('edit');hideDiv('profile');hideDiv('changepass');">Edit Profile</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('changepass');hideDiv('profile');hideDiv('edit');">Change Password</button>
                </div>
                <div class="col-md-10">
                    <div class="row">
                    <div id="profile" class="profile-detail p-2">
                        <h1>My Profile</h1>
                        <div class="d-flex align-items-center">
                            <div class="profile-img"><img src="../image/<?php echo $row['Image'];?>" alt="person image"></div>
                            <div class="profile-text">
                                <div class="d-flex justify-content-between">
                                    <h6>User Name :</h6>
                                    <span style="text-transform:capitalize;"><?php echo $row['Username'];?></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6>Gender :</h6>
                                    <span style="text-transform:capitalize;"><?php echo $row['Gender'];?></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6>Email :</h6>
                                    <span><?php echo $row['Email'];?></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6>Phone :</h6>
                                    <span><?php echo $row['Phone'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="edit">
                        <h1>Edit Profile</h1>
                        <form action="../php/change.php" method="POST" enctype="multipart/form-data">
                        <div class="inline-line">
                            <input type="hidden" value="<?php echo $row['sno'];?>" name="sno">
                            <div class=" input-group mb-2 me-3">
                                <input type="text" name="Name" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" value="<?php echo $row['Username'];?>">
                                <div class="input-group-text bg-primary text-white" id="email" >
                                    <span class="material-symbols-outlined">person</span>
                                </div>
                            </div>
                            <div class="col-md-3 image">
                                <img src="../image/<?php echo $row['Image'];?>" alt="..">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="hidden" value="<?php echo $row['Image'] ?>" name="old_image">
                            <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="new_image">
                            <div class="input-group-text bg-primary text-white" id="locaname" >
                                <span class="material-symbols-outlined">image</span>
                            </div>
                        </div>
                        <div class="input-group mb-2 ">
                        <select class="form-select bg-light fs-6" aria-label="Default select example" aria-describedby="acc" name="Gender" id="Account">
                            <option selected value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="input-group-text bg-primary text-white" id="acc">
                        <span class="material-symbols-outlined">person_search</span>
                        </div>
                    </div>
                        <div class="inline-line">
                            <div class="input-group mb-2 me-2">
                                <input type="tel" name="Phone" class="form-control form-control-lg bg-light fs-6" maxlength="10" aria-describedby="phone" value="<?php echo $row['Phone'];?>" >
                                <div class="input-group-text bg-primary text-white" id="phone"><span class="material-symbols-outlined">
                                    phone
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="email" name="Email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" value="<?php echo $row['Email'];?>" readonly>
                                <div class="input-group-text bg-primary text-white" id="email">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <button type="submit" name="upsubmit" value="upsubmit" class="btn btn-lf btn-primary w-100 fs-6">Edit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    <div id="changepass" class="hidden">
                        <h1>Change Password</h1>
                        <form action="../php/change.php" method="post">
                            <div class="input-group mb-3">
                                <input type="password" name="Password" id="password" class="form-control form-control-lg bg-light fs-6 " aria-describedby="pass" placeholder="New password">
                                <div class="input-group-text bg-primary text-white" id="pass" onclick="togglePassword()"><span class="material-symbols-outlined togglepass">
                                    visibility_off
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="Cpassword" id="Cpassword" class="form-control form-control-lg bg-light fs-6" aria-describedby="pass" placeholder="New confirm password">
                                <div class="input-group-text bg-primary text-white" id="pass" onclick="CtogglePassword()"><span class="material-symbols-outlined Ctogglepass">
                                    visibility_off
                                    </span>
                                </div>
                            </div>
                            <button type="submit" name="change" class="btn btn-danger mb-3" value="<?php echo $row['sno'];?>">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

 
    <!-- bootstrap js -->
    
    <script rel="stylesheet" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script rel="stylesheet" src="https://cdn.jsdelivr.net/npm/pooper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

         <!-- script -->
    <script>
        function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.togglepass');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.textContent = 'visibility';
    } else {
        passwordInput.type = 'password';
        toggleIcon.textContent = 'visibility_off';
    }
}

function CtogglePassword() {
    const passwordInput = document.getElementById('Cpassword');
    const toggleIcon = document.querySelector('.Ctogglepass');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.textContent = 'visibility';
    } else {
        passwordInput.type = 'password';
        toggleIcon.textContent = 'visibility_off';
    }
}
    </script>

    <!-- shoe and hide div -->
<script>
    function showDiv(divId) {
      var div = document.getElementById(divId);
      if (div) {
        div.style.display = 'block';
      }
    }
  
    function hideDiv(divId) {
      var div = document.getElementById(divId);
      if (div) {
        div.style.display = 'none';
      }
    }
  </script>

<?php
if(!empty($_SESSION['Email'])){
    include('../php/message.php');
}
?>
</body>
</html>
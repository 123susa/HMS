<?php
  session_start();
  
  if (isset($_SESSION["AEmail"])){
    $con=mysqli_connect('localhost','root','','avhost');

    $q="SELECT * FROM `hospital_detail` WHERE `Email`='{$_SESSION['AEmail']}'";
    $res=mysqli_query($con,$q);
    $row=mysqli_fetch_assoc($res);

    $des="SELECT * FROM `accounttype_detail` WHERE `sno`='{$row['Account_type']}'";
    $dres=mysqli_query($con,$des);
    $drow=mysqli_fetch_assoc($dres);
  }
  else{
    $_SESSION['ertitle']="Login";
    $_SESSION['ermessage']="Please Login First";
    header('location:../sign/adminlog.php');
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
    <link rel="stylesheet" href="../css/dash.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/d0295a5f3b.js" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <section class="">
    <div class="container-fluid top-menu">
        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
            <div class="ml-5">
            <a class="navbar-brand" href="#">
                <img src="../image/logo.webp" alt="..." width="45px" height="45px">
                <span class="mx-3">Av Hospital</span>
            </a>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="material-symbols-outlined">menu</span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body menu">
                    <ul class="">
                        <li class="mb-2">
                            <a href="dashboard.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <?php
                        if($drow['Account_type']=='Admin'){
                        ?>
                        <li class="mb-2">
                            <a href="editweb.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">edit</i>
                                <span>Edit Website</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="staff.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">group</i>
                                <span>Hospital Staff</span>
                            </a>
                        </li>
                        <?php }?>
                        <?php
                        if($drow['Account_type']!='Admin'){
                        ?>
                        <li class="mb-2">
                            <a href="appointment.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">assignment</i>
                                <span>Appointment</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="leave.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">pending_actions</i>
                                <span>Leave Form</span>
                            </a>
                        </li>
                        <?php }?>
                        <?php
                        if($drow['Account_type']=='Admin'){
                        ?>
                        <li class="mb-2">
                            <a href="message.php" class="d-flex align-items-center">
                                <i class="material-symbols-outlined me-3">Contact_mail</i>
                                <span>Message</span>
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                    
                </div>
            </div>
            </div>
            <div class="profile me-5">
                <div class="dropdown show text-light">
                    <div class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../ad_upload_image/<?php echo $row['Host_Image']?>" alt=".." width="45px" height="45px">
                        <span>Hello,<?php echo $row['Host_Name']?></span>
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <div class="profile-item">
                            <a class="" href="myprofile.php">
                                <i class="material-symbols-outlined">settings</i>
                                <span>My Profile</span>
                            </a>
                        </div>
                        <div class="profile-item">
                            <form action="../php/adminlogout.php" method="post">
                                <button name="logout" >
                                    <i class="icon material-symbols-outlined">logout</i>
                                    <span class="text">Logout</span>
                                </button>
                        
                            </form>
                        </div>
                      
                    </div>
                </div>
                
            </div>
  
        </nav>
    </div>
    </section>
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-12-md">
                <h1>Hello, <?php echo $drow['Account_type']?> !</h1>
            </div>
        </div>
        <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-warning">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 counter" data-target="1500"></h3>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-primary">
                          <span class="material-symbols-outlined">group</span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-black font-weight-bold">Our Visitor's</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-info ">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 counter" data-target="100"></h3>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-dark">
                        <span class="material-symbols-outlined">stethoscope</span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-dark font-weight-bold">Total Doctor's</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-primary">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 counter" data-target="300"></h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-warning">
                        <span class="material-symbols-outlined">handshake</span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-dark font-weight-bold">Supportive Partner</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body bg-success">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0 counter" data-target="2100"></h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-secondary">
                        <span class="material-symbols-outlined">patient_list</span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-dark font-weight-bold">Happy Patient's</h6>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
            
        </div>
    </div>
</section>
<!-- bootstrap js -->
    
<script rel="stylesheet" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script rel="stylesheet" src="https://cdn.jsdelivr.net/npm/pooper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <?php
if(!empty($_SESSION['AEmail'])){
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

<script src="../js/custome.js"></script>
</body>
</html>
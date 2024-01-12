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

    $ddes="SELECT * FROM `department` WHERE `Dep_id`='{$row['Host_dep']}'";
    $ddres=mysqli_query($con,$ddes);
    $ddrow=mysqli_fetch_assoc($ddres);
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
            <a class="navbar-brand mb-3" href="#">
                <img src="../image/logo.webp" alt="..." width="45px" height="45px">
                <span class="mx-3">Av Hospital</span>
            </a>
            <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="material-symbols-outlined">menu</span>
            </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header ">
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
            <div class="profile me-5 mb-2">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 mb-2 p-2">
                <button class="btn btn-outline-success m-2" onclick="showDiv('profile');hideDiv('edit');hideDiv('changepass');">My Profile</button>
                <button class="btn btn-outline-success m-2" onclick="showDiv('edit');hideDiv('profile');hideDiv('changepass');">Edit Profile</button>
                <button class="btn btn-outline-success m-2" onclick="showDiv('changepass');hideDiv('profile');hideDiv('edit');">Change Password</button>
            </div>
            <div class="col-md-10" id="profile">
                <div class="row">
                    <h1>My Profile</h1>
                    <div class="col">
                        <div class="row">
                            <div class="d-flex profile">
                                <div class="col-md-6 pimage mt-4">
                                    <img src="../ad_upload_image/<?php echo $row['Host_Image']?>" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="detail mt-5 ">
                                        <h5>Name : <?php echo $row['Host_Name']?></h5>
                                        <p>Gender : <?php echo $row['Email']?></p>
                                        <p>Phone : <?php echo $row['Phone']?></p>
                                        <p>Department : <?php echo $ddrow['Dep_name']?></p>
                                        <p>Account : <?php echo $drow['Account_type']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-md-10">
                <div class="hidden" id="edit">
                    <h1>Edit Profile</h1>
                    <form action="../php/profileedit.php" method="POST" enctype="multipart/form-data">
                        <div class="d-flex">
                            <input type="hidden" value="<?php echo $row['sno'];?>" name="sno">
                            <div class=" input-group mb-2 me-3">
                                <input type="text" name="Name" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" value="<?php echo $row['Host_Name'];?>">
                                <div class="input-group-text bg-primary text-white" id="email" >
                                    <span class="material-symbols-outlined">person</span>
                                </div>
                            </div>
                            <div class="col-md-3 image">
                                <img src="../ad_upload_image/<?php echo $row['Host_Image'];?>" class="w-25" alt="..">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="hidden" value="<?php echo $row['Host_Image'] ?>" name="old_image">
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
                            <button type="submit" name="aupsubmit" value="upsubmit" class="btn btn-lf btn-primary w-100 fs-6">Edit</button>
                        </div>
                    </form>
                </div>
                <div id="changepass" class="hidden">
                    <h1>Change Password</h1>
                    <form action="../php/profileedit.php" method="post">
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
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

    $staff="SELECT * FROM `hospital_detail`";
    $staffres=mysqli_query($con,$staff);

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

    <style>
        form >.inline-line{
    display: flex;
  }
  
  @media screen and (max-width:768px) {
    .inline-line{
      display: flex;
      flex-direction: column;
    }
  }
    </style>
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
                <div class="appoint-but">
                    <button class="btn btn-outline-success m-2" onclick="showDiv('stafflist');hideDiv('addstaff');">Staff Detials</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('addstaff');hideDiv('stafflist');">Add New Staff</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="stafflist">
                <h1>Staff Details</h1>
                <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Staff Name</th>
                          <th>Staff Image</th>
                          <th>Staff Gender</th>
                          <th>Staff Email</th>
                          <th>Staff Phone</th>
                          <th>Department</th>
                          <th>Account</th>
                          <th>Password</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $n=1;
                        while($staffrow=mysqli_fetch_assoc($staffres)){
                            $sdes="SELECT * FROM `accounttype_detail` WHERE `sno`='{$staffrow['Account_type']}'";
                            $sdres=mysqli_query($con,$sdes);
                            $sdrow=mysqli_fetch_assoc($sdres);

                            $ddes="SELECT * FROM `department` WHERE `Dep_id`='{$staffrow['Host_dep']}'";
                            $ddres=mysqli_query($con,$ddes);
                            $ddrow=mysqli_fetch_assoc($ddres);

                            echo "
                        <tr>
                            <td>$n</td>
                            <td>{$staffrow['Host_Name']}</td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$staffrow['Host_Image']}' style='width:50px; height:50px;'></div></td>
                            <td>{$staffrow['Gender']}</td>
                            <td>{$staffrow['Email']}</td>
                            <td>{$staffrow['Phone']}</td>
                            <td>{$ddrow['Dep_name']}</td>
                            <td>{$sdrow['Account_type']}</td>
                            <td>{$staffrow['Password']}</td>
                            <td><form action='../php/editform.php' method='post'><button name='staffedit' class='btn btn-primary' value='{$staffrow['sno']}'>Edit</button></form></td>
                            <td><form action='../php/deleten&l.php' method='post'><button name='staffdel' class='btn btn-danger' value='{$staffrow['sno']}'>Delete</button></form></td>
                        </tr>";
                        $n++;
                        }

                        ?>
                      </tbody>
                    </table>
            </div>
            <div id="addstaff" class="hidden">
                <h1>Add New Staff</h1>
                <form action="../php/staffadd.php" method="post">
                        <div class="input-group mb-2">
                            <input type="text" name="Name" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" placeholder="Full name">
                            <div class="input-group-text bg-primary text-white" id="email" required>
                                <span class="material-symbols-outlined">person</span>
                            </div>
                        </div>
                        <div class="inline-line">
                            <p class="m-2">Gender:</p>
                            <div class="form-group m-2">
                                <input type="radio" name="Gender" value="male" id="male" required>
                                <label for="male">Male</label>
                            </div>
                            <div class="form-group m-2">
                                <input type="radio" name="Gender" value="female" id="female" required>
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="inline-line">
                            <div class="input-group mb-2 me-2">
                                <input type="tel" name="Phone" class="form-control form-control-lg bg-light fs-6" maxlength="10" aria-describedby="phone" placeholder="Phone number" required>
                                <div class="input-group-text bg-primary text-white" id="phone"><span class="material-symbols-outlined">
                                    phone
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="email" name="Email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" placeholder="Email address" required>
                                <div class="input-group-text bg-primary text-white" id="email">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                            </div>
                        </div>

                        
                        <div class="inline-line">
                            <div class="input-group mb-2 me-2">
                                <select class="form-select bg-light fs-6" aria-label="Default select example" aria-describedby="dep" name="Dep" id="Department" required>
                                    <option selected disabled>Select Department</option>
                                    
                                </select>
                                <div class="input-group-text bg-primary text-white" id="dep" required>
                                <span class="material-symbols-outlined">clinical_notes</span>
                                </div>
                            </div>
                            <div class="input-group mb-2 ">
                                <select class="form-select bg-light fs-6" aria-label="Default select example" aria-describedby="acc" name="Atype" id="Account" required>
                                    <option selected disabled>Select Account Type</option>
                                    
                                </select>
                                <div class="input-group-text bg-primary text-white" id="acc" required>
                                <span class="material-symbols-outlined">person_search</span>
                                </div>
                            </div>
                        </div>
                        <div class="inline-line">
                            <div class="input-group mb-2 me-2">
                                <input type="password" name="Password" class="form-control form-control-lg bg-light fs-6" id="password" aria-describedby="pass" placeholder="Password" required>
                                <div class="input-group-text bg-primary text-white" id="pass" onclick="togglePassword()"><span class="material-symbols-outlined togglepass">
                                    visibility_off
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="password" name="Cpassword" class="form-control form-control-lg bg-light fs-6" id="Cpassword" aria-describedby="pass" placeholder="Confirm password" required>
                                <div class="input-group-text bg-primary text-white" id="pass" onclick="CtogglePassword()"><span class="material-symbols-outlined Ctogglepass">
                                    visibility_off
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" name="usubmit" class="btn btn-lf btn-primary w-100 fs-6" value="Sign Up">
                        </div>
                    </form>
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
<!-- ajax code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url : "../php/Staffde.php",
                    type : "POST",
                    success : function(data){
                        $("#Department").append(data);
                    }
                });
            }
            loadData();

        });
        $(document).ready(function(){
            function loadAData(){
                $.ajax({
                    url : "../php/Staffacc.php",
                    type : "POST",
                    success : function(data){
                        $("#Account").append(data);
                    }
                });
            }
            loadAData();
        });
    </script>

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

<script src="../js/custome.js"></script>
</body>
</html>
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
                        <?php $phone=mysqli_query($con,$hostadd);
    $pho=mysqli_fetch_row($phone);?>
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
                                <a href="about.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link">Event's</a>
                            </li>
                            <li class="nav-item">
                                <a href="doctor.php" class="nav-link">Doctor's</a>
                            </li>
                            <li class="nav-item">
                                <a href="appoint.php" class="nav-link" style="border-bottom: 2px solid aliceblue;color: aliceblue;">Appointment</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="Prescription.php" class="nav-link">Prescription</a>
                            </li> -->
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a href="contact.php" class="nav-link">Payment</a>
                            </li> -->
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
            <div class="row appoint">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="appoint-but">
                                <button class="btn btn-outline-success m-2" onclick="showDiv('apform');hideDiv('aplist');hideDiv('aphistory');showDiv('doc-img')">Appointment Form</button>
                                <button class="btn btn-outline-success m-2" onclick="showDiv('aplist');hideDiv('apform');hideDiv('aphistory');hideDiv('doc-img');">My Appointment</button>
                                <button class="btn btn-outline-success m-2" onclick="showDiv('aphistory');hideDiv('apform');hideDiv('aplist');hideDiv('doc-img');">Appointment History</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 form-con d-flex flex-column">
                    <div id="apform">
                        <h1>Appointment Form</h1>
                        
                        <form action="../php/appointform.php" method="post" class="appoint-form">
                            <small>Fill appointment form carefully!</small>
                            <div class="input-group mb-2">
                                <input type="text" name="pName" class="form-control form-control-lg bg-light fs-6" aria-describedby="name"  placeholder="Patient name" required>
                                <div class="input-group-text bg-primary text-white" id="name" required>
                                <span class="material-symbols-outlined">account_circle</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" name="pemail" value="<?php echo $row['Email'];?>" readonly>
                                <div class="input-group-text bg-primary text-white" id="email" required>
                                <span class="material-symbols-outlined">mail</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="age" name="age" placeholder="Age" required>
                                <div class="input-group-text bg-primary text-white" id="age" required>
                                <span class="material-symbols-outlined">tag</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <input type="tel" class="form-control form-control-lg bg-light fs-6" aria-describedby="phone" name="phone" placeholder="Phone number" required>
                                <div class="input-group-text bg-primary text-white" id="email" required>
                                    <span class="material-symbols-outlined">phone</span>
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <select class="form-select bg-light fs-6" aria-label="Default select example" aria-describedby="dep" name="dep" id="Department" required>
                                    <option selected disabled>Select Doctor Department name</option>
                                    
                                </select>
                                <div class="input-group-text bg-primary text-white" id="dep" required>
                                <span class="material-symbols-outlined">clinical_notes</span>
                                </div>
                            </div>
                            
                            <div class="input-group mb-2">
                                <select class="form-select bg-light fs-6" aria-label="Default select example" name="docname" aria-describedby="doc" id="Doctor" required>
                                    <option selected disabled>Select Doctor</option>
                                    
                                </select>
                                <div class="input-group-text bg-primary text-white" id="doc" required>
                                    <span class="material-symbols-outlined">contact_page</span>
                                </div>
                            </div>
                            
                            <div class="input-group mb-2">
                                <input type="date" class="form-control form-control-lg bg-light fs-6" aria-describedby="phone" name="date" placeholder="date" required>
                                <div class="input-group-text bg-primary text-white" id="email" required>
                                <span class="material-symbols-outlined">calendar_month</span>
                                </div>
                            </div>

                            <div class="input-group mb-2">
                                <select class="form-select bg-light fs-6" aria-label="Default select example" name="tmode" aria-describedby="tmood" required>
                                    <option selected disabled>Select Time Mode</option>
                                    <option value="M">Morning</option>
                                    <option value="A">Afternoon</option>
                                </select>
                                <div class="input-group-text bg-primary text-white" id="tmood" required>
                                    <span class="material-symbols-outlined">schedule</span>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div id="aplist" class="hidden">
                        <h1>My Appointment's</h1>
                        
                    </div>
                    <div id="aphistory" class="hidden">
                        <h1>Appointment History</h1>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                      <tr>
                                        <th scope="col">S.No.</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Appointment Date</th>
                                        <th scope="col">Time Slot</th>
                                        <th scope="col">Timing</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Delete</th>
                                      </tr>
                                    </thead>
                                    <tbody id="appointh">
                                      
                                    </tbody>
                                </table>
                            </div>
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
                <?php
                    $aboutrow=mysqli_fetch_assoc($aboutusres);
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
    

    <!-- ajax code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function loadData(type, category_id){
                $.ajax({
                    url : "../php/loadappoint.php",
                    type : "POST",
                    data : {type : type, id : category_id},
                    success : function(data){
                        if(type == "DocData"){
                           $("#Doctor").html(data);
                        }
                        else{
                            $("#Department").append(data);
                        }
                    }
                });
            }
            loadData();

            $("#Department").on("change",function(){
                var department = $("#Department").val();

                loadData("DocData",department);
            });
        });

        // show list of appointment
        $(document).ready(function(){               //make sure that code is only perform when the DOM has completely loaded.
            function currentData(){
                $.ajax({
                    url: "../php/ajex/listappoint.php",
                    type:"POST",
                    success: function(data){
                      $("#aplist").append(data);
                    }
                });
            }
            currentData();
        });

        // show history of appointment
        $(document).ready(function(){               //make sure that code is only perform when the DOM has completely loaded.
            function historyData(){
                $.ajax({
                    url: "../php/ajex/happoint.php",
                    type:"POST",
                    success: function(data2){
                      $("#appointh").append(data2);
                    }
                });
            }
            historyData();
        });
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
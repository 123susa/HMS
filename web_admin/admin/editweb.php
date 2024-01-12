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

    $direct="SELECT * FROM `head_top`";
    $ddres=mysqli_query($con,$direct);

    $news="SELECT * FROM `news_data` ORDER BY `sno` DESC";
    $nres=mysqli_query($con,$news);

    $location="SELECT * FROM `location`";
    $lres=mysqli_query($con,$location);

    $event="SELECT * FROM `gallery`";
    $eventres=mysqli_query($con,$event);

    $feed="SELECT * FROM `feedback`";
    $feedres=mysqli_query($con,$feed);

    $aboutus="SELECT * FROM `aboutus`";
    $aboutusres=mysqli_query($con,$aboutus);

    $hospital="SELECT * FROM `hospital_locations` ORDER BY `created` DESC";
    $hospitalres=mysqli_query($con,$hospital);

    $service="SELECT * FROM `icondetail` ORDER BY `created` DESC";
    $serviceres=mysqli_query($con,$service);
    
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
                    <ul>
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
                    <button class="btn btn-outline-success m-2" onclick="showDiv('homepara');hideDiv('location');hideDiv('new');hideDiv('para');hideDiv('gallery');hideDiv('feed');hideDiv('address');hideDiv('aboutus'); hideDiv('icon');">Home Top Paragraph</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('new');hideDiv('location');hideDiv('homepara'); hideDiv('para');hideDiv('gallery');hideDiv('feed');hideDiv('address');hideDiv('aboutus'); hideDiv('icon');">Add News</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('location');hideDiv('new'); hideDiv('para');hideDiv('homepara');hideDiv('gallery');hideDiv('feed');hideDiv('address');hideDiv('aboutus'); hideDiv('icon');">Add Location</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('gallery');hideDiv('homepara');hideDiv('new');hideDiv('location');hideDiv('para');hideDiv('feed');hideDiv('address');hideDiv('aboutus'); hideDiv('icon');">Add Gallery</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('feed');hideDiv('gallery');hideDiv('homepara');hideDiv('new');hideDiv('location');hideDiv('para');hideDiv('address');hideDiv('aboutus'); hideDiv('icon');">User Feedback</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('aboutus');hideDiv('para');hideDiv('homepara');hideDiv('new');hideDiv('location');hideDiv('gallery');hideDiv('feed');hideDiv('address'); hideDiv('icon');">Add aboutus content</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('address');hideDiv('para');hideDiv('aboutus');hideDiv('homepara');hideDiv('new');hideDiv('location');hideDiv('gallery');hideDiv('feed'); hideDiv('icon');">Add Hospital Address</button>
                    <button class="btn btn-outline-success m-2" onclick="showDiv('icon');hideDiv('address');hideDiv('para');hideDiv('aboutus');hideDiv('homepara');hideDiv('new');hideDiv('location');hideDiv('gallery');hideDiv('feed');">Add Service</button>
                </div>
            </div>
        </div>
        
        <div class="row">
            <h1 id="para">Please click on the button and edit the website.......</h1>
            <div id="homepara" class="hidden">
                <h3>Home Paragraph</h3>
                <form action="../php/headtop.php" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="head" name="directname" placeholder="Add Director Name" required>
                        <div class="input-group-text bg-primary text-white" id="head" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="directname" name="directimg" placeholder="Add Director Image" required>
                        <div class="input-group-text bg-primary text-white" id="directname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="head" name="directposit" placeholder="Add Director Position" required>
                        <div class="input-group-text bg-primary text-white" id="head" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <textarea cols="30" rows="6" class="form-control form-control-lg bg-light fs-6" aria-describedby="msg" name="directcontent" placeholder="Add Content About Director" required></textarea>
                        <div class="input-group-text bg-primary text-white" id="msg" >
                            <span class="material-symbols-outlined">message</span>
                        </div>
                    </div>
                    <button type="submit" name="subdirect" class="btn btn-primary" >Confirm</button>
                </form>
                <div class="col-md-12 mt-3">
                    <h2>Head Paragraph Data</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Director Name</th>
                          <th>Director Image</th>
                          <th>Director Position</th>
                          <th>About Director</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $n=1;
                        while($ddrow=mysqli_fetch_assoc($ddres)){
                            echo "
                        <tr>
                            <td>$n</td>
                            <td>{$ddrow['Head_name']}</td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$ddrow['Head_img']}' style='width:50px; height:50px;'></div></td>
                            <td>{$ddrow['Head_position']}</td>
                            <td>{$ddrow['Head_content']}</td>
                            <td><form action='../php/deleten&l.php' method='post'><button class='btn btn-danger' name='directdel' value='{$ddrow['sno']}'>Delete</button></form></td>
                        </tr>";
                        $n++;
                        }

                        ?>
                        
                        
                      </tbody>
                    </table>
                </div>
            </div>

            <div id="new" class="hidden">
                <h3>Recent News</h3>
                <form action="../php/editnews.php" method="POST" enctype="multipart/form-data" >
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="newsname" placeholder="Add Location name" required>
                        <div class="input-group-text bg-primary text-white" id="loca" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="newsimg" placeholder="Add Location name" required>
                        <div class="input-group-text bg-primary text-white" id="locaname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="date" class="form-control form-control-lg bg-light fs-6" aria-describedby="date" name="newdate" placeholder="News Date" required>
                        <div class="input-group-text bg-primary text-white" id="date" >
                            <span class="material-symbols-outlined">calendar_month</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <textarea cols="30" rows="6" class="form-control form-control-lg bg-light fs-6" aria-describedby="msg" name="newcontent" placeholder="News Content" required></textarea>
                        <div class="input-group-text bg-primary text-white" id="msg" >
                            <span class="material-symbols-outlined">message</span>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                </form>
                <div class="col-md-12 mt-3">
                    <h2>News Data</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>News Heading</th>
                          <th>News Image</th>
                          <th>News Content</th>
                          <th>News Date</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $n=1;
                        while($nrow=mysqli_fetch_assoc($nres)){
                            echo "
                        <tr>
                            <td>$n</td>
                            <td>{$nrow['News_heading']}</td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$nrow['News_img']}' style='width:50px; height:50px;'></div></td>
                            <td>{$nrow['News_text']}</td>
                            <td>{$nrow['News_date']}</td>
                            <td><form action='../php/deleten&l.php' method='post'><button class='btn btn-danger' name='newdel' value='{$nrow['sno']}'>Delete</button></form></td>
                        </tr>";
                        $n++;
                        }

                        ?>
                        
                        
                      </tbody>
                    </table>
                </div>
            </div>

            <div id="location" class="hidden">
                <h3>Add Location of Hospital</h3>
                <form action="../php/location.php" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="logoname" placeholder="Add Location name" required>
                        <div class="input-group-text bg-primary text-white" id="loca" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="logoimg" placeholder="Add Location name" required>
                        <div class="input-group-text bg-primary text-white" id="locaname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <button type="submit" name="subloc" class="btn btn-primary" >Confirm</button>
                </form>
                <div class="col-md-12 mt-3">
                    <h2>Location Data</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Location Name</th>
                          <th>Location Image</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $n=1;
                        while($locatrow=mysqli_fetch_assoc($lres)){
                            echo "
                        <tr>
                            <td>$n</td>
                            <td>{$locatrow['locationname']}</td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$locatrow['locationimg']}' style='width:50px; height:50px;'></div></td>
                            <td><form action='../php/deleten&l.php' method='post'><button name='locatdel' class='btn btn-danger' value='{$locatrow['sno']}'>Delete</button></form></td>
                        </tr>";
                        $n++;
                        }

                        ?>
                      </tbody>
                    </table>
                </div>
            </div>

            <div id="gallery" class="hidden">
                <h3>Gallery Image</h3>
                <form action="../php/addgallery.php" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="ename" placeholder="Add Event name" required>
                        <div class="input-group-text bg-primary text-white" id="loca" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="date" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="edate" placeholder="Add Event date" required>
                        <div class="input-group-text bg-primary text-white" id="loca" >
                            <span class="material-symbols-outlined">calendar_month</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="img1" placeholder="Add Image one" required>
                        <div class="input-group-text bg-primary text-white" id="locaname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="img2" placeholder="Add Image two" required>
                        <div class="input-group-text bg-primary text-white" id="locaname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" aria-describedby="locaname" name="img3" placeholder="Add Image three" required>
                        <div class="input-group-text bg-primary text-white" id="locaname" >
                            <span class="material-symbols-outlined">signature</span>
                        </div>
                    </div>
                    <button type="submit" name="subgallery" class="btn btn-primary" >Confirm</button>
                </form>
                <div class="col-md-12">
                <h2>Event's Gallery Data</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Event Name</th>
                          <th>Event Date</th>
                          <th>Event Image1</th>
                          <th>Event Image2</th>
                          <th>Event Image3</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $n=1;
                        while($eventrow=mysqli_fetch_assoc($eventres)){
                            echo "
                        <tr>
                            <td>$n</td>
                            <td>{$eventrow['Event_name']}</td>
                            <td>{$eventrow['Event_date']}</td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$eventrow['Img1']}' style='width:50px; height:50px;'></div></td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$eventrow['Img2']}' style='width:50px; height:50px;'></div></td>
                            <td><div style='width:50px; height:50px;'><img src='../image/{$eventrow['Img3']}' style='width:50px; height:50px;'></div></td>
                            <td><form action='../php/deleten&l.php' method='post'><button name='eventdel' class='btn btn-danger' value='{$eventrow['sno']}'>Delete</button></form></td>
                        </tr>";
                        $n++;
                        }

                        ?>
                      </tbody>
                    </table>
                </div>
            </div>
            <div id="feed" class="hidden">
            <div class="col-md-12">
                <h2>List of User Feedback</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Email</th>
                          <th>Feedback</th>
                          <th>Status</th>
                          <th>Show</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                            $n=1;
                            while($feedrow=mysqli_fetch_assoc($feedres)){
                                if($feedrow['checked']==1){
                                    $show="Show on web";
                                }
                                else{
                                    $show="click on show";
                                }
                                echo "<tr>
                                <td>$n</td>
                                <td>{$feedrow['Useremail']}</td>
                                <td>{$feedrow['Feedback']}</td>
                                <td>$show</td>
                                <td><form action='../php/check.php' method='post'><button name='feededit' class='btn btn-success' value='{$feedrow['sno']}'>Show</button></form></td>
                                <td><form action='../php/deleten&l.php' method='post'><button name='feeddel' class='btn btn-danger' value='{$feedrow['sno']}'>Delete</button></form></td>
                            </tr>";
                                $n++;
                            }
                            ?>
                      </tbody>
                    </table>
                </div>
            </div>
            <div id="aboutus" class="hidden">
                <div class="col-md-12">
                    <h2>Add About Us Content</h2>
                    <form action="../php/addabout.php" method="post">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="abouthead" placeholder="Add About us heading" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">pin_drop</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="aboutpara1" placeholder="Add About us paragraph" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">pin_drop</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="aboutpara2" placeholder="Add About us paragraph" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">pin_drop</span>
                            </div>
                        </div>
                        <button type="submit" name="subabout" class="btn btn-primary" >Confirm</button>
                    </form>
                    <div class="col-md-12 mt-2">
                    <h2>About us List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>sno</th>
                                    <th>Aboutus Heading</th>
                                    <th>Aboutus Paragraph</th>
                                    <th>Aboutus Paragraph</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $n=1;
                                    while($aboutusrow=mysqli_fetch_assoc($aboutusres)){
                                        echo "
                                        <tr>
                                            <td>$n</td>
                                            <td>{$aboutusrow['AboutHead']}</td>
                                            <td>{$aboutusrow['AboutPara1']}</td>
                                            <td>{$aboutusrow['AboutPara2']}</td>
                                            <td><form action='../php/deleten&l.php' method='post'><button name='aboutdel' class='btn btn-danger' value='{$aboutusrow['sno']}'>Delete</button></form></td>
                                        </tr>
                                        ";
                                        $n++;
                                    }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="address" class="hidden">
                <div class="col-md-">
                    <h2>Add Hospital Location</h2>
                   <form action="../php/hospitallocation.php" method="post">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="address" placeholder="Add Hospital Address" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">pin_drop</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="email" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" name="hostemail" placeholder="Add Hospital Email" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="tel" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" maxlength="10" name="hostphone" placeholder="Add Hospital Phone Number" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">phone</span>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="tel" class="form-control form-control-lg bg-light fs-6" aria-describedby="loca" maxlength="10" name="hostemery" placeholder="Add Hospital Emergency Number" required>
                            <div class="input-group-text bg-primary text-white" id="loca" >
                                <span class="material-symbols-outlined">phone</span>
                            </div>
                        </div>
                        <button type="submit" name="subhost" class="btn btn-primary" >Confirm</button>
                   </form>
                   <div class="col-md-12 mt-2">
                    <h2>About us List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>sno</th>
                                    <th>Hospital Address</th>
                                    <th>Hospital Email</th>
                                    <th>Hospital Phone</th>
                                    <th>Hospital Emergency</th>
                                    <th>Status</th>
                                    <th>Show</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $n=1;
                                    while($hospitalrow=mysqli_fetch_assoc($hospitalres)){
                                        if($hospitalrow['checked']==1){
                                            $showhost="Show on web";
                                        }
                                        else{
                                            $showhost="click on show";
                                        }
                                        echo "
                                        <tr>
                                            <td>$n</td>
                                            <td>{$hospitalrow['LoactionAddress']}</td>
                                            <td>{$hospitalrow['HospitalEmail']}</td>
                                            <td>{$hospitalrow['HospitalPhone']}</td>
                                            <td>{$hospitalrow['HospitalEmerg']}</td>
                                            <td>$showhost</td>
                                            <td><form action='../php/check.php' method='post'><button name='hostedit' class='btn btn-success' value='{$hospitalrow['sno']}'>Show</button></form></td>
                                            <td><form action='../php/deleten&l.php' method='post'><button name='hostdel' class='btn btn-danger' value='{$hospitalrow['sno']}'>Delete</button></form></td>
                                        </tr>
                                        ";
                                        $n++;
                                    }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="icon" class="hidden">
                <h1>Edit Service's</h1>
                <form action="../php/headtop.php" method="post">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="head" name="iconname" placeholder="icon name from google icon" required>
                        <div class="input-group-text bg-primary text-white" id="head" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="head" name="iconhead" placeholder="Name of Service" required>
                        <div class="input-group-text bg-primary text-white" id="head" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" aria-describedby="head" name="iconpara" placeholder="About Service" required>
                        <div class="input-group-text bg-primary text-white" id="head" >
                            <span class="material-symbols-outlined">pin_drop</span>
                        </div>
                    </div>
                    <button type="submit" name="subicon" class="btn btn-primary" >Confirm</button>
                </form>
                <div class="col-md-12 mt-3">
                    <h2>Service's Data</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sno</th>
                          <th>Service Icon</th>
                          <th>Service Name</th>
                          <th>Service Paragraph</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $n=1;
                            while($servicerow=mysqli_fetch_assoc($serviceres)){
                                echo "<tr>
                                    <td>$n</td>
                                    <td>{$servicerow['iconName']}</td>
                                    <td>{$servicerow['name']}</td>
                                    <td>{$servicerow['para']}</td>
                                    <td><form action='../php/deleten&l.php' method='post'><button class='btn btn-danger' name='servicedel' value='{$servicerow['sno']}'>Delete</button></form></td>
                                </tr>";
                                $n++;
                            }

                        ?>
                        
                        
                      </tbody>
                    </table>
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
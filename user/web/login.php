<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="../image/logo.webp">

    <!-- css -->
    <link rel="stylesheet" href="../css/login.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <!-- main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- login container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- left box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #2745bd;">
                <div class="featured-image mb-3">
                    <img src="../image/login.png" alt="login image" class="img-fluid" style="width: 250px;">
                </div>
                <h2 class="text-white fs-2 left-head" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">New here?</h2>
                <p class="text-white text-wrap text-center left-para" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Sign up and discover great amount of new opportunities!</p>
            </div>

            <!-- right box -->
            <div class="col-md-6  right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <form action="../php/userlogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="Email" class="form-control form-control-lg bg-light fs-6" aria-describedby="email" placeholder="Email address">
                        <div class="input-group-text bg-primary text-white" id="email">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" name="Password" class="form-control form-control-lg bg-light fs-6" id="password" aria-describedby="pass" placeholder="Password">
                        <div class="input-group-text bg-primary text-white" id="pass" onclick="togglePassword()"><span class="material-symbols-outlined togglepass">
                            visibility_off
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" name="" id="formcheck" class="form-check-input">
                            <label for="formcheck" class="form-cheeck-label text-secondary"><small>Remember me</small></label>
                        </div>
                        <div class="forget">
                            <small><a href="#">Forget Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                            <input type="submit" name="LOG" class="btn btn-lf btn-primary w-100 fs-6" value="Sign In">
                        </div>
                    </form>
                    <div class="icons d-flex">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="../image/google.png" alt="facebook" style="width: 30px;" class="me-2"><small>Sign in with Google</small></button>
                    </div>

                </div>
                <div class="row">
                    <small class="m-3">Don't have account? <a href="signup.php">Sign UP</a></small>
                </div>
            </div>
        </div>
    </div>


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
    </script>

<?php
 include('../php/message.php');
?>
</body>
</html>
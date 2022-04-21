<!doctype html>
<html lang="en">
  <head>
    <!--FAVICON-->
    <link rel="shortcut icon" type="image/png" href="./favicon.ico"/>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=B612&display=swap" rel="stylesheet">

    <!--LOTTIE ANIMATIONS-->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./script.js"></script>

    <link rel="stylesheet" href="./styles4.css">
    <title>E-Healthcare - About Us</title>
  </head>
  <body>
    <div class="navbtn btn"> <i class="fas fa-bars fa-2x"></i></div>
    <div class="navigationbar">
    <div class="loginbtn">
            <button type="button" class="btn btn-ml-3 btn-outline-light" data-bs-toggle="modal" data-bs-target="#signupportal">
                Sign Up <i class="fa fa-lg fa-user"></i>
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="signupportal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                        require('db.php');
                        // When form submitted, insert values into the database.
                        if (isset($_REQUEST['username'])) {
                            // removes backslashes
                            $username = stripslashes($_REQUEST['username']);
                            //escapes special characters in a string
                            $username = mysqli_real_escape_string($con, $username);
                            $email    = stripslashes($_REQUEST['email']);
                            $email    = mysqli_real_escape_string($con, $email);
                            $password = stripslashes($_REQUEST['password']);
                            $password = mysqli_real_escape_string($con, $password);
                            $create_datetime = date("Y-m-d H:i:s");
                            $query    = "INSERT into `users` (username, password, email, create_datetime)
                                        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                            $result   = mysqli_query($con, $query);

                            if ($result) {
                                echo 'You are registered successfully. <br>  <a href="./login.php">Login here</a> <br>
                                <p class="link">Click here to <a href="registration.php">register</a> again.</p>';
                            } else {
                                echo "<div class='form'>
                                    <h3>Required fields are missing.</h3><br/>
                                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                                    </div>";
                            }
                        } else {
                    ?>
                        <form class="form" action="" method="post">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="username" class="col-form-label">Username</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id = "username" class="login-input" name="username" placeholder="Username" required />
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="email" class="col-form-label">Email</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id = "email" class="login-input" name="email" placeholder="Email Adress">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="password" class="col-form-label">Password</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id = "password" class="login-input" name="password" placeholder="Password">
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Register" class="login-button">
                            <p class="link">Already have an account? <a href="./login.php">Login here</a></p>
                        </form>
                    <?php
                        }
                    ?>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
            </div>
        </div>  
        <div class="navbarhome">
            <a href="./homepage.php">
                <img src="./images/home.png" width="40px" alt="">
            </a>
        </div>
        <div class="navbarheart">
            <a href="./specialists.php">
                <img src="./images/heart.png" width="40px" alt="">
            </a>
        </div>
        <div class="navbarmail">
            <a href="mailto: abc@example.com">
                <img src="./images/mail.png" width="40px" alt="">
            </a>
        </div>
        
        <div class="navbarinfo">
            <a href="./about2.php">
                <img src="./images/info.png" width="40px" alt="">
            </a>
        </div>
        <div class="div topnav"></div>
        <div class="div vertnav"></div>
        <div class="navdesh"></div>
        <div class="navdesv"></div>
    </div>
    <div class="loginportal">

    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mainheading center">
                    <b> About Us</h2> </b>
                </h2>
                <h5 class="maindesc ">
                This platform aims to connect patients to available doctors for online consultation and also allows doctors to provide prescriptions to the patients. 
                This is an environment where various patients needing doctor help at their home can consult doctors, 
                send their images, chat with doctors, tell then their issues and discuss remedies.
                </h5>
            </div>
            <div class="col-5">
                <img src = "./images/image_19.png" class="mainimg">
            </div>
        </div>
        <div class="row">
            <h5 class="maindesc"><br>
            This platform is a project developed for the subject - Software Engineering and Project Management.
                <br><br>
                <ul>
                    <li>Rishit Saraf &nbsp; &nbsp;  &nbsp;&nbsp; RA1911003011001</li>
                    <li>Anchal Porwal   &nbsp;&nbsp;&nbsp;RA1911003011002</li>
                    <li>Harshita Mathur RA1911003011004</li>
                </ul>
            </h5>
        </div>
    </div>
    <div class="row footer">
        <div class="col">
            <div class="center signature">
                <h6> ⚙️🛠 by RS 🚀 </h6>
            </div>
            <h5 class="footertext"> 
                <b> 
                <a href="mailto: abc@example.com" class="a2">Contact</a> &nbsp |&nbsp <a href="./about.php" class="a2">About Us </a> 
                </b> 
            </h5>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html> 
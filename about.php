<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

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
        <!-- Button trigger modal -->
        <div class="loginbtn">
            <h5 class="greeting">
                Hey, <?php echo $_SESSION['username']; ?>! &nbsp

            <a type="button" class="btn btn-outline-dark" href="logout.php">
                Log Out <i class="fa fa-lg fa-user"></i>
            </a>
        </div>        
        <div class="navbarhome">
            <a href="./dashboard.php">
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
            <a href="./about.php">
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
                <h6> ?????????? by RS ???? </h6>
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
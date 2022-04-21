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

    <link rel="stylesheet" href="./styles3.css">
    <title>E-Healthcare - Book Apointment</title>
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
            <div class="col-12">
                <h4 class="mainheading center">
                    <b> Hey, <?php echo $_SESSION['username']; ?>! find your best Doctor <br> <br></h2> </b>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="row mt-1">
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_1">
                            <img src="./images/Medical_Heart.png" draggable="false" width = "100px" alt="heart" class="cardimg"> <br>
                            <h5 class="cardtext mt-4 center"><b>Cardiology</b></h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_2">
                            <img src="./images/Lungs.png" draggable="false" width = "100px" alt="lungs" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>Pulmonology</b> </h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_3">
                            <img src="./images/Dental_Crown.png" draggable="false" width = "100px" alt="tooth" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>Dentistry</b> </h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_3">
                            <img src="./images/Female Profile.png" draggable="false" width = "100px" alt="tooth" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>Dermatology</b> </h5>
                        </div>
                    </a>
                </div>
        </div>
        <div class="row">
            <div class="row mt-1">
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_1">
                            <img src="./images/Mother's Health.png" draggable="false" width = "100px" alt="heart" class="cardimg"> <br>
                            <h5 class="cardtext mt-4 center"><b>Gynaecology & Obstetrics</b></h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_2">
                            <img src="./images/Doctor Male.png" draggable="false" width = "100px" alt="lungs" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>General Physician</b> </h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_3">
                            <img src="./images/Dog Bone.png" draggable="false" width = "100px" alt="tooth" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>Orthopaedics</b> </h5>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="https://meet.google.com/cqi-ozor-agq" target="_blank" class="a1">
                        <div class="cardbox_3">
                            <img src="./images/Fetus.png" draggable="false" width = "100px" alt="tooth" class="cardimg">
                            <h5 class="cardtext mt-4 center"> <b>Paediatrics</b> </h5>
                        </div>
                    </a>
                </div>
        </div>
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
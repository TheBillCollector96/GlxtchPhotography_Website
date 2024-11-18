<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Service Packages</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="scripts/myScript.js"></script>
        <script src="scripts/smooth-scroll.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="stylesheet" href="/assets/dcode.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!------NAVIGATION BARr------->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php"><img src="images/white v2.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">CONTACT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OUR WORK
                          </a>
                            <div class="dropdown-menu" style="background-color: #555;" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item nav-link" style="color: #fff;" href="services.php">SERVICES</a>
                                <a class="dropdown-item nav-link" style="color: #fff;" href="gallery.php">GALLERY</a>
                          </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!------SCROLL UP BUTTON------>
        <button id="btnScrollToTop" style="z-index: 1;" onclick="scrollUp()">
            <i class="material-icons">arrow_upward</i>
        </button>
        <!------SERVICES------>
        <section id="services">
            <div class="container">
                <h1>Our Service Packages</h1>
                <div class="row services" id="graduation">
                    <div class="col-md-6 service-details">
                        <h2>Graduation</h2>
                        <h4>R 150.00 /each</h4>
                        <p>
                            Are you and your friends graduating? 
                            <br>Let's take some cool shots with your
                            <br>class mates and close relatives.
                            <br><br>
                            You guys deserve it and this is a moment 
                            <br>you will cherish your whole lives.
                            <br>We will take pictures of each one of you 
                            <br>individually along with your close ones 
                            <br>throughout the whole ceremony.
                            <br>Everyone will then receive all the pictures taken 
                            <br>particularly for them by the end of the day for personal use.
                        </p>
                        <b>• <span>UNLIMITED PICTURES</span></b><br>
                        <b>• <span>FROM BEGINING TO END OF CEREMONY</span></b><br>
                        <b>• <span>EDITS WILL BE CHARGED AN ADDITIONAL R10p/pic</span></b><br><br>
                        <a href="contactUs.php" class="btn btn-outline-danger">CONTACT US NOW>></a>
                    </div>
                    <div class="col-md-6 service-images">
                        <img src="images/blob_final.png" class="shape">
                        <img src="images/grad 1.png" class="models">
                    </div>
                </div>
                <div class="row services" id="personal">
                    <div class="col-md-6 service-details">
                        <h2>Personal</h2>
                        <h4>R 100.00 /hour</h4>
                        <p>
                            Your memories mean the whole world. 
                            <br>Any special occassion to never be forgotten.
                            <br>We will present them with quality.
                            <br>
                            <br>It could be your birthday and your friends 
                            <br>are hosting a birthday party for you.
                            <br>I'm sure they want to take pictures in their favourite outfits.
                            <br>Or it's a formal day and you are in need of 
                            <br>pictures around a particular subject.
                            <br>Or you want to take individual pictures by a specific place.
                            <br>We would be glad to deliver all of your pictures with 
                            <br>absolute quality by the end of our session.
                        </p>
                        <b>• <span>UNLIMITED PICTURES</span></b><br>
                        <b>• <span>EDITS WILL BE CHARGED AN ADDITIONAL R10p/pic</span></b><br><br>
                        <a href="contactUs.php" class="btn btn-outline-danger">CONTACT US NOW>></a>
                    </div>
                    <div class="col-md-6 service-images">
                        <img src="images/blob_final.png" class="shape">
                        <img src="images/personal 1.png" class="models">
                    </div>
                </div>
                <div class="row services" id="events">
                    <div class="col-md-6 service-details">
                        <h2>Events</h2>
                        <h4>R 2000.00 vat-discl.</h4>
                        <p>
                            Outdoor or Indoor events, from weddings to parties.
                            <br>We are here to capture those vital moments.
                            <br>
                            <br>This is your big day and everyone is coming to celebrate you.
                            <br>This is that important milestone you've reached and your friends 
                            <br>and family will be there to enjoy it with you.
                            <br>Allow us to take pictures of every moment that takes place. 
                            <br>We will make sure no one's left out.
                        </p>
                        <b>• <span>UNLIMITED PICTURES</span></b><br>
                        <b>• <span>UP TO 6 HOURS COVERAGE</span></b><br>
                        <b>• <span>100 EDITED PICTURES</span></b><br><br>
                        <a href="contactUs.php" class="btn btn-outline-danger">CONTACT US NOW>></a>
                    </div>
                    <div class="col-md-6 service-images">
                        <img src="images/blob_final.png" class="shape">
                        <img src="images/Events 1.png" class="models">
                    </div>
                </div>
            </div>
        </section>
        <!------FOOTER------>
        <section id="footer">
            <div class="container text-center">
                <p>Glxtch Photography<i class="fa fa-registered"></i></p>
            </div>
        </section>
    </body>
</html>

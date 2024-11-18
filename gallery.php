<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
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
        <!------GALLERY------>
        <section id="gallery">
            <div class="container">
                <h1>Gallery</h1>
                <div class="row">
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/4.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/3.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/14.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/2.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/19.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/4_1.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/8.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/sanza-1.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
                    </div>
                    <div class="col-md-4 gallery-pic">
                        <div class=""> <!--class="img-box"-->
                            <img src="images/gallery/15.jpg" class="image-resize"> <!--class="image-resize"-->
                        </div>
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

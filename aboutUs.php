<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
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
        <!------ABOUT------>
        <section id="about">
            <div class="container">
                <h1>About Us</h1>
                <div class="row">
                    <div class="about-content text-center">
                        Memories fade away, but the pictures are there to remind us everyday. 
                        Apart from us recently starting to operate, we have seen the most brightest smiles on our clients faces.
                        Not only in their pictures though. 
                        We have made it our purpose to capture your precious moments together with your loved ones within beautiful outrages shots.
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <h2>Our Mission</h2>
                    <div class="about-content">
                        Our mission is to provide an enjoyable experience in front of the camera as well as timeless photographs that you will treasure for a lifetime. 
                        Also as photographers, we aim to capture stories in the form of images within the moments you share with your loved ones anywhere, any time.
                        Finally, Our goal is to provide our clients with every picture that was taken within our scheduled session. 
                        It is your memories that matters after all.
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <h2>Our Values</h2>
                    <div class="about-content">
                        We strongly commit ourselves to give our clients our full attention and attentively listen to what you have to say, 
                        It is our duty to communicate it amongst ourselves. We will not leave you astray, but we will at least try no matter
                        how hard your service request is. We are obliged to at least try. On the contrary, we will make it our first priority
                        to make sure that everyone receives their pictures on time.
                    </div>
                </div>
            </div>
        </section>
        <!------THE TEAM------>
        <section id="team">
            <div class="container">
                <h1>The Team</h1>
                <div class="row">
                <div class="col-md-6 profile-pic text-center">
                    <div class="img-box">
                        <img src="images/IMG_1534.jpg" class="img-responsive image-resize2">
                        <ul>
                            <a href="https://www.facebook.com/katlego.trick.7"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="https://twitter.com/Katlego_TRick"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <div>
                        <h2>Katlego Mtileni</h2>
                        <h3>Founder/Photographer</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6 profile-pic text-center">
                    <div class="img-box">
                        <img src="images/IMG_1372.jpg" class="img-responsive image-resize2">
                        <ul>
                            <a href="https://www.facebook.com/danielmpho.seeri"><li><i class="fa fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <div>
                        <h2>Kamogetswe Seeri</h2>
                        <h3>Photographer</h3>
                        <p></p>
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

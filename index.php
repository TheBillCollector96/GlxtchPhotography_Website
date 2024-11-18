<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Glxtch Photography</title>
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
        <section id="nav-bar" style="z-index: 1;">
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
        <!------SLIDER------>
        <section id="slider" style="z-index: -1;">
            <div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!--<ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>-->
                    <div class="carousel-inner">
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/5.jpg" alt="First slide">
                          <div class="carousel-caption" style="">
                              <h5 style=""><span>Graduation Pictures </span>With Mama To Hang On Her Wall.</h5>
                              <p style=""><a href="services.php #graduation" class="btn btn-danger">Find Out More>></a></p>
                        </div>
                      </div>
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="images/17.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h5 style=""><span>It's The </span>Memories That Matters</h5>
                            <p><a href="gallery.php" class="btn btn-danger">See Gallery>></a></p>
                        </div>
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/Mashy1.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <h5><span>Solo Pictures </span>Taken By Professionals</h5>
                            <p><a href="services.php #personal" class="btn btn-danger">Find Out More>></a></p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </section>
        
        <!------SERVICES------>
        <section id="services">
            <div class="container">
                <h1>Our Service Packages</h1>
                <div class="row services">
                    <div class="col-md-4 text-center">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h3>Graduation</h3>
                        <p>
                            Gather your friends together for a whole ceremony with endless pictures with close relatives and class mates.<br>
                        </p>
                        <a href="services.php #graduation" style="display: block; width: 100%; background: #fc0303; color: #fff; font-family: serif; font-size: 20px; border-radius: 10px; opacity: 90%;" onclick="scrollToGraduation()">Find Out More</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h3>Personal</h3>
                        <p>
                            It's your special day and you cannot afford not to capture those memomries. Let's do it for you with style and quality.
                        </p>
                        <a href="services.php #personal" style="display: block; width: 100%; background: #fc0303; color: #fff; font-family: serif; font-size: 20px; border-radius: 10px; opacity: 90%;" onclick="scrollToPersonal()">Find Out More</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="icon">
                            <i class="fa fa-flag"></i>
                        </div>
                        <h3>Events</h3>
                        <p>
                            Whether it's outdoor or indoor, from weddings to parties, Let's get those vital moments on camera.<br>
                        </p>
                        <a href="services.php #events" style="display: block; width: 100%; background: #fc0303; color: #fff; font-family: serif; font-size: 20px; border-radius: 10px; opacity: 90%;" onclick="scrollToEvents()">Find Out More</a>
                    </div>
                </div>
            </div>
        </section>
        <!------ABOUT------>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About Us</h2>
                        <div class="about-content">
                            Memories fade away, but the pictures are there to remind us everyday. 
                            Apart from us recently starting to operate, we have seen the most brightest smiles on our clients faces.
                            Not only in their pictures though. 
                            We have made it our purpose to capture your precious moments together with your loved ones within beautiful outrages shots.
                        </div>
                        <a href="aboutUs.php" class="btn btn-outline-danger">Read more>></a>
                    </div>
                    <div class="col-md-6 skills-bar">
                        <h2>Camera Skills</h2>
                        <p>Picture Quality</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 80%">80%</div>
                        </div>
                        <p>Clear shots</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 90%">90%</div>
                        </div>
                        <p>Edits</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 85%">85%</div>
                        </div>
                        <p>Picture Delivery & Customer Care</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <div class="col-md-4 text-center">
                        <!---Nothing happening--->
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="gallery.php" class="btn btn-outline-danger">See more>></a>
                    </div>
                </div>
            </div>
        </section>
        <!---CONTACT--->
        <section id="contact">
            <div class="container">
                <h1>Get In Touch With Us</h1>
                <!---First Row--->
                <div class="row">
                    <!---Left Column--->
                    <div class="col-md-6">
                        <form name="frmDetails" action="processContact.php" method="POST" class="contact-form">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="NAME">
                            </div>
                            <div class="form-group">
                                <input type="text" id="surname" name="surname" class="form-control" placeholder="SURNAME">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="PHONE NUMBER">
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control" placeholder="EMAIL">
                            </div>
                            <div class="form-group">
                                <select name="subject" id="subject" class="form-control">
                                    <option value="SUBJECT">SUBJECT</option>
                                    <option value="Graduation">Graduation</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Event">Event</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" style="resize: both; overflow: auto;" rows="4" id="message" name="message" placeholder="MESSAGE"></textarea>
                            </div>
                            <input type="button" class="btn btn-outline-danger" id="btnsubmit" name="btnsubmit" value="SEND MESSAGE" onclick="validate()">
                        </form>
                    </div>
                    <!---Right Column--->
                    <div class="col-md-6 contact-info text-center">
                        <div class="follow">
                            <i class="fa fa-phone"></i><b>Phone:</b>
                            <p>+27 81 537 2145</p>
                        </div>
                        <div class="follow">
                            <i class="fa fa-envelope-o"></i><b>Email:</b>
                            <a href="mailto:glxtchphotographic@gmail.com">glxtchphotographic@gmail.com</a>
                        </div>
                        <div class="follow">
                            <i class="fa fa-map-marker"></i><b>Address:</b> 
                            <p>Cassandra Ave, Bedworth Park, 1939</p>
                        </div>
                        <div class="follow">
                            <label><b>Follow & Like Us:</b></label><br>
                            <a href="https://www.facebook.com/GlxtchGotYourPic"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/glxtchgotyourpic"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="faqpanel text-center">
                        <h5><span>Still waiting for a response? </span>It could be in here.</h5>
                        <p><a href="faq.php" class="btn btn-outline-danger">FAQ >></a></p>
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

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FAQ</title>
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
        <!------FAQ------>
        <section id="faq">
            <div class="container text-center">
                <h1>Facts And Questions</h1>
                <h5>1. What types of photography do you do?</h5>
                <p>We most likely work with individuals on special occasions. We aim to capture everyone's happiest moments.</p>
                <h5>2. Why should I hire a professional photographer?</h5>
                <p>Memories never die, so we want to capture them in quality. We know exactly how to capture those special moments.</p>
                <h5>3. Are deposits refundable?</h5>
                <p>Deposits are only refundable when notified 1 week prior to date of shoot.</p>
                <h5>4. When will we get our finished prints?</h5>
                <p>Clients will receive pictures on the same day of shoot. Edits may take up to 3 days.</p>
                <h5>5. How much are your photography services?</h5>
                <p>All relevant information including pricing of packages are included on the <a href="services.php">service page</a>.</p>
                <h5>6. What’s your cancellation/rescheduling policy?</h5>
                <p>Cancellation/Rescheduling must be notified 1 week prior to date of shoot.</p>
                <h5>7. How long will our session take?</h5>
                <p>Our sessions will only take place within the specified time range of each package that we offer. (<a href="services.php">See service page</a>).
                <br>An additional R150.00 will charged for any additional hours except for the "Personal" Service Package offer.</p>
                <h5>8. Do you backup or otherwise secure images for protection?</h5>
                <p>Every client will receive their pictures through a Google Drive link sent via email.
                <br>Data stored onto a Google drive never forfeit, therefore clients are expected to follow it each time their pictures are needed or lost.</p>
                <h5>9. Do I get the copyright/ownership of my photos?</h5>
                <p>Yes. Glxtch Photography may only use edited pictures that were freely given to clients for promotional reasons which may have the Glxtch Photography watermark included on the picture.</p>
                <h5>10. Where are you located?</h5>
                <p>We mainly operate in Vaal. Transport fee may be charged for services done out of Vaal.</p>
                <h5>11. Do you have previous clients we can speak to as reference to your work?</h5>
                <p>Yes. If you follow & like us on <a href="https://www.facebook.com/GlxtchGotYourPic">Facebook</a> and <a href="https://www.instagram.com/glxtchgotyourpic">Instagram</a>, you can interact with anyone and everyone within the Glxtch family.</p>
                <h5>12. We want to take pictures in a super cool location on our wedding day. Do you know if we need a permit.</h5>
                <p>With the Covid-19 lockdown regulations being eased. We can take pictures anywhere you'd like.</p>
                <h5>13. Do we receive the raw, unedited pictures?</h5>
                <p>Clients will receive every picture that was taken within the time frame of their chosen service package.
                <br>An additional R10.00 will be charged per picture to be edited.</p>
                <h5>14. Can some of our photos be delivered in both black & white colour?</h5>
                <p>Yes. Clients may request greyscale upon edits for any desired picures.</p>
                <h5>15.Who are the crew behind Glxtch Photography?</h5>
                <p>Glxtch Photography is only operated by Katlego Mtileni & Kamogetswe Seeri. 
                <br>(See "The Team" section on the <a href="aboutUs.php">about us</a> page.)</p>
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

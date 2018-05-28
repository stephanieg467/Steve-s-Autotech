<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicles | Steve's Autotech</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="magic.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="logo">
            <a href="index.php">
                <img id="logo" src="images/autotech.JPG" border="0">
            </a>
        </div>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="active"><a href="Vehicles.php">Vehicles</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="affiliates.php">Affiliates</a></li>
        </ul>
    </div>

</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbo_vehicles text-center">
            <div id="title">
                <h1 id="title">Safety Certified</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">

    <div class="row content">

        <?php include('side_content1.php'); ?>

        <div class="paragraph col-sm-8 text-left">

            <div class="spacer"></div>

            <div class = "row">
                <div class = "text-center col-sm-12">
                    <div class="top-bottomtitle">
                        <h1 class="top-bottom2">Vehicles For Sale</h1>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class = "row">
                <div class = "col-sm-12">
                    <p  id="services-paragraph" class="text-center">
                        Stop by the shop anytime to checkout our clean, used cars. We safety certify the vehicles before putting them up for sale
                    </p>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <div class="col-sm-4">
                    <h3>2006 Ford Explorer</h3>
                    <img id="vehicle-sale" src="images/fordexp.jpg" alt="Ford Explorer">
                    <p>SOLD</p>
                </div>
                <div class="col-sm-4">
                    <h3>2003 Ford Focus ZX3</h3>
                    <img id="vehicle-sale" src="images/focus.jpg" alt="Ford Focus ZX3">
                    <p>191,000 kms, 4 Cyl, PW, PL, Manual Trans, new winter tires!</p>
                </div>
                <div class="col-sm-4">
                    <h3>2003 Honda Odyssey</h3>
                    <img id="vehicle-sale" src="images/ody.jpg" alt="Honda Odyssey" height="200">
                    <p>243,000 kms, V6, PW, PL, Dual automatic sliding doors, AC.</p>
                </div>
            </div>

            <hr>

            <div class = "row">
                <div class = "text-center col-sm-12">
                    <div class="top-bottomtitle">
                        <h1 class="top-bottom2">We Also Sell Tires</h1>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class = "row">
                <div class = "col-sm-12">
                    <p  id="services-paragraph" class="text-center">
                        Tires are what keep you on the road and if they are worn or wearing out, then come to Steve's Autotech.
                        Steve or Erik will help you find the right tire for your vehicle.
                    </p>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <div class="paragraph col-sm-12">
                    <div style="height:100px" id="myCarousel2" class="carousel slide text-center" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="https://www.michelin.com/eng/"><img src="images/mich.png"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.bridgestone.com/"><img src="images/bridge.png"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.firestonetire.ca/"><img src="images/fire.png"></a>
                            </div>

                            <div class="item">
                                <a href="https://www.goodyear.ca/en-CA/tires-home"><img src="images/good.png"></a>
                            </div>
                        </div>
                        <div>
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <?php include('side_content2.php'); ?>

    </div>

</div>

<?php include 'footer.php';?>

</body>
</html>
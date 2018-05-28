<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us | Steve's Autotech</title>
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
            <li><a href="Vehicles.php">Vehicles</a></li>
            <li class="active"><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="affiliates.php">Affiliates</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbo_aboutus text-center">
            <div id="title_services">
                <h1 id="title">About Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">

    <div class="row content">

        <?php include('side_content1.php');?>

        <div class="paragraph col-md-8 text-left">

            <div class="spacer"></div>

            <div class = "row">
                <div class = "text-center col-md-12">
                    <div class="top-bottomtitle">
                        <h1 class="top-bottom2">Meet the Mechanics</h1>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class = "row">
                <div class = "col-md-12">
                    <p id="services-paragraph" class="text-center">
                        Steve and his son Erik run Steve's Autotech and specialize in BMW
                        and Mini. They also service and repair other foreign and  domestic vehicles
                    </p>
                </div>
            </div>

            <div class="spacer"></div>

            <div class = "row">
                <div class = "col-md-6">
                    <img id="steve" src="images/steve.JPG" alt="Steve">
                    <div class="top-bottom">
                        <h2 class="text-center top-bottom2">Steve Galata</h2>

                        <p class="title">-Owner and Operator</p>
                        <p>
                            Some text that describes me lorem ipsum ipsum lorem. Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img id="erik" src="images/erik2.jpg" alt="Erik">
                    <div class="top-bottom">
                        <h2 class=" text-center top-bottom2">Erik Galata</h2>
                        <p class="title">-Manager Mechanic</p>
                        <p>
                            Some text that describes me lorem ipsum ipsum lorem. Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.Some text that describes me lorem ipsum ipsum lorem.
                        </p>
                    </div>
                </div>
            </div>

            <hr>

            <div class = "row">
                <div class = "text-center col-md-12">
                    <div class="top-bottomtitle">
                        <h1 class="top-bottom2">About the shop</h1>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <img id="shop" src="images/shop.JPG" alt="STEVE'S AUTOTECH">
                    </div>
                    <div class="col-md-8">
                        <p id="services-paragraph">
                            Steve's Autotech only uses genuine and Original Equipment Manufacturer (O.E.M.) parts! From our many years of experience, each part
                            we recommend will stand up to the demands of Okanagan driving. Our service even comes with a guarantee and
                            certain new parts come with manufacturer warranties.
                        </p>
                    </div>
                </div>
            </div>


        </div>

        <?php include('side_content2.php');?>

    </div>
</div>

</div>

<?php include 'footer.php';?>

</body>
</html>
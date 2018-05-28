<!DOCTYPE html>
<html lang="en">
<head>
    <title>Steve's Autotech</title>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="Vehicles.php">Vehicles</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="affiliates.php">Affiliates</a></li>
        </ul>
    </div>

</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbo_main text-center">
            <div id="title">
                <h1 id="title">Steve's Autotech</h1>
                <p id="title">Automotive Repair</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">

    <div class="row content">

        <?php include('side_content1.php'); ?>

        <div class="paragraph col-md-8 text-left">
            <div class="row">
                <h1 class="main-title">Penticton's</h1>
                <h1 class="main-title2">&nbsp;BMW Independent</h1>
            </div>
            <div class="row">
                <p id="services-paragraph" class="text-center">
                    <span style="display:inline-block; width: 30px;"></span>At Steve's Autotech we have all the necessary tools, equipment and knowledge to repair and maintain your
                    vehicle. Steve has over 30 years of experience in the industry and has owned and operated Steve's Autotech
                    since 1994. To keep current with automotive technology as cars become increasingly sophisticated we regularly
                    attend training courses so that you can rest assured we can work on your vehicle using the proper procedures and
                    specifications. We have the necessary dealer level equipment to fully service and repair BMWs and MINIs. We also
                    service and repair other foreign and domestic vehicles.
                </p>
            </div>

            <hr>

            <div class="col-md-4 text-center">
                <h3>Meet Steve and Erik</h3>
                <a href="aboutus.php"><button class="button btn btn-info" style="vertical-align:middle"><span>Meet us </span></button></a>
            </div>
            <div class="paragraph col-md-4 text-center">
                <h3>Services we provide</h3>
                <a href="services.php"><button class="button btn btn-info" style="vertical-align:middle"><span>Services </span></button></a>
            </div>
            <div class="paragraph col-md-4 text-center">
                <h3>We also sell vehicles</h3>
                <a href="Vehicles.php"><button class="button btn btn-info" style="vertical-align:middle"><span>Vehicles </span></button></a>
            </div>
            <div style="margin-top:200px" class="row">
                <div class="col-md-4 text-center">
                    <img src="images/main1.jpeg">
                </div>
                <div class="paragraph col-md-4 text-center">
                    <img src="images/main2.jpeg">
                </div>
                <div class="paragraph col-md-4 text-center">
                    <img src="images/main3.jpeg">
                </div>
            </div>
        </div>

        <?php include('side_content2.php'); ?>

    </div>

</div>

<?php include 'footer.php';?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Affiliates | Steve's Autotech</title>
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
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="affiliates.php">Affiliates</a></li>
        </ul>
    </div>

</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbo_affiliates text-center">
            <div id="title">
                <h1 id="title">Affiliates</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">

    <div class="row content">

        <?php include('side_content1.php'); ?>

        <div class="paragraph col-sm-8 text-left">

            <div class="row text-center">
                <div class="top-bottom-affiliates">
                    <h1 class="top-bottom2">Our Partners</h1>
                </div>
                <p id="services-paragraph">Steve's Autotech is in proud association with the following...</p>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.cintas.com/"><img src="images/cintas.png"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.valleyfirst.com/Personal/"><img src="images/valley.jpg"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.thegymeternal.com/"><img src="images/gymeternal.png"></a>
                    </div>
                </div>

                <div class="spacer"></div>

                <div class="row">
                    <div class="col-sm-4">
                        <a href="http://www.funwaterpools.ca/"><img src="images/fwp.png"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.acromedia.com/"><img src="images/acro.png"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.pentictonflyingclubcopafifty.com/"><img src="images/pfc.png"></a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row text-center">
                <div class="top-bottom-affiliates">
                    <h1 class="top-bottom2">Parts Suppliers</h1>
                </div>
                <p id="services-paragraph">A few of our trusted suppliers</p>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="http://www.lordco.com/"><img src="images/lordco.jpeg"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="http://www.worldpac.ca/"><img src="images/worldpac.png"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="http://www.autocamping.ca/"><img src="images/autocamping.jpeg"></a>
                    </div>
                </div>

                <div class="spacer"></div>


                <div class="row">
                    <div class="col-sm-4">
                        <a href="https://www.brianjesselbmw.com/en-CA/home"><img src="images/bmw-brian-jessel.jpg"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.snapon.com/EN"><img src="images/snapon.jpg"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.napaonline.com/"><img src="images/Napa.jpg"></a>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <div class="col-sm-12">
                    <div id="tools-img">
                        <img id="tools" src="images/tools.JPG" alt="TOOLS">
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
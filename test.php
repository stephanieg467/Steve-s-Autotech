<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact | Steve's Autotech</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='style.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBD_ng4NE2ZpgGDQ3jMTFQtemoO7a_T5HA"></script>
    <script src="custom.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="magic.js"></script>
    <script src="app-js.js"></script>
    <script>
        $( function() {
            $( "#form_option1" ).datepicker();
        } );
        $( function() {
            $( "#form_option2" ).datepicker();
        } );
    </script>
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
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="affiliates.php">Affiliates</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbo_contact text-center">
            <div id="title_contact">
                <h1 id="title">Come visit us</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-center">

    <div class="row content">

        <?php include('side_content1.php');?>

        <div class="paragraph col-sm-8 text-center">

            <div class="row">
                <div class="col-sm-4">
                    <h3><span class="glyphicon glyphicon-map-marker"></span> 1338 Commercial Way</h3>
                    <h3>Penticton, BC</h3>
                    <h3>V2A3H6</h3>
                    <h3><span class="glyphicon glyphicon-phone-alt"></span> (250)-276-5347</h3>
                    <h4><strong>Mon-Fri: 8:30am - 5pm</strong></h4>
                    <h4><span class="glyphicon glyphicon-envelope"</span> E-mail: <a  id="email" href="mailto: stevesautotech@shaw.ca"><strong>stevesautotech@shaw.ca</strong></a></h4>
                    <h4>* After hours drop-off available. Call for more details.</h4>
                </div>
                <div class="col-sm-8">
                    <div class="spacer"></div>
                    <div id="map"></div>
                </div>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <h1 id="appointment">Schedule an appointment</h1>
            </div>

            <div class="spacer"></div>

            <div class="row">
                <div class="col-sm-12">

                    <form id="appointment-form" method="post" action="app-process2.php" role="form">

                        <div class="row">
                            <div id="Appname-group" class="form-group col-sm-6">
                                <label  class="app-form-label" for="app_name">Name *</label>
                                <input id="app_name" type="text" name="Appname" class="form-control" placeholder="Enter your name *">
                            </div>
                            <div id="Appemail-group" class="form-group col-sm-6">
                                <label class="app-form-label" for="app_email">Email *</label>
                                <input id="app_email" type="email" name="Appemail" class="form-control" placeholder="Enter your email *">
                            </div>
                        </div>

                        <div class="row">
                            <div id="Appphone-group" class="form-group col-sm-6">
                                <label  class="app-form-label" for="app_name">Phone *</label>
                                <input id="app_phone" type="text" name="Appphone" class="form-control" placeholder="Enter your phone number">
                            </div>
                            <div id="Appvehicle-group" class="form-group col-sm-6">
                                <label class="app-form-label" for="app_vehicle">Vehicle *</label>
                                <input id="app_vehicle" type="text" name="Appvehicle" class="form-control" placeholder="Year, Make and Model *">
                            </div>
                        </div>
                        <div class="row">
                            <div id="Appreason-group" class="form-group col-sm-12">
                                <label class="app-form-label" for="reason">Reason for appointment * </label>
                                <textarea id="reason" type="text" name="Appreason" class="form-control" placeholder="What is the reason for your appointment*"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div id="option1" class="form-group col-sm-6">
                                <label class="app-form-label control-label" for="form_option1">First Choice *</label>
                                <input id="form_option1" type="text" name="option1" class="form-control" placeholder="Enter your first choice *">
                            </div>
                            <div id="option2" class="form-group col-sm-6">
                                <label class="app-form-label control-label" for="form_option2">Second Choice *</label>
                                <input id="form_option2" type="text" name="option2" class="form-control" placeholder="Enter your second choice">
                            </div>
                        </div>
                        <div class="paragraph row">
                            <div id="Appcaptcha-group" class="col-sm-12 form-group">
                                <p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
                                <input id="captcha" class="form-control" type="text" size="6" maxlength="5" name="captcha">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" id="form-submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                        <div class="paragraph row">
                            <div class="col-sm-12">
                                <p class="paragraph text-muted"><strong>*</strong> All fields are required.</p>
                            </div>
                        </div>
                    </form>
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
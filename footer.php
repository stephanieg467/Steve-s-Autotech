<section id="footer">

    <div class="row text-center text-xs-center text-sm-left text-md-left">

        <div class="col-xs-12 col-sm-4 col-md-4">
            <div id="logo">
                <a href="index.php">
                    <img style="border-radius: 5px; margin: 70px;" src="images/autotech2.JPG" width="300" height="150" border="0">
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3><strong>Steve's Autotech</strong></h3>
            <h4>1338 Commercial Way</h4>
            <h4>Penticton, BC</h4>
            <h4>V2A3H6</h4>
            <h4>250-276-5347</h4>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3>Site map</h3>
            <ul class="list-unstyled quick-links">
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist1" href="index.php"> Home</a></li>
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist2" href="services.php"> Services</a></li>
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist3" href="Vehicles.php"> Vehicles</a></li>
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist4" href="aboutus.php"> About Us</a></li>
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist5" href="contact.php"> Contact</a></li>
                <li><span class="glyphicon glyphicon-wrench gly-spin"></span><a style="color: grey" id="footlist6" href="affiliates.php"> Affiliates</a></li>
            </ul>

            <script>

                document.getElementById("footlist1").addEventListener("mouseover", mouseOver1);
                document.getElementById("footlist1").addEventListener("mouseout", mouseOut1);
                function mouseOver1() {
                    document.getElementById("footlist1").style.color = "white";
                }
                function mouseOut1() {
                    document.getElementById("footlist1").style.color = "grey";
                }

                document.getElementById("footlist2").addEventListener("mouseover", mouseOver2);
                document.getElementById("footlist2").addEventListener("mouseout", mouseOut2);
                function mouseOver2() {
                    document.getElementById("footlist2").style.color = "white";
                }
                function mouseOut2() {
                    document.getElementById("footlist2").style.color = "grey";
                }

                document.getElementById("footlist3").addEventListener("mouseover", mouseOver3);
                document.getElementById("footlist3").addEventListener("mouseout", mouseOut3);
                function mouseOver3() {
                    document.getElementById("footlist3").style.color = "white";
                }
                function mouseOut3() {
                    document.getElementById("footlist3").style.color = "grey";
                }

                document.getElementById("footlist4").addEventListener("mouseover", mouseOver4);
                document.getElementById("footlist4").addEventListener("mouseout", mouseOut4);
                function mouseOver4() {
                    document.getElementById("footlist4").style.color = "white";
                }
                function mouseOut4() {
                    document.getElementById("footlist4").style.color = "grey";
                }

                document.getElementById("footlist5").addEventListener("mouseover", mouseOver5);
                document.getElementById("footlist5").addEventListener("mouseout", mouseOut5);
                function mouseOver5() {
                    document.getElementById("footlist5").style.color = "white";
                }
                function mouseOut5() {
                    document.getElementById("footlist5").style.color = "grey";
                }

                document.getElementById("footlist6").addEventListener("mouseover", mouseOver6);
                document.getElementById("footlist6").addEventListener("mouseout", mouseOut6);
                function mouseOver6() {
                    document.getElementById("footlist6").style.color = "white";
                }
                function mouseOut6() {
                    document.getElementById("footlist6").style.color = "grey";
                }

            </script>
        </div>

    </div>

    <hr>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p class="text-muted">&copy; 1994-<?php echo date("Y");?> Steve's Autotech Ltd. All rights reserved.
            </p>
        </div>

    </div>

</section>
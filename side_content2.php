<div class="col-sm-2 sidecontent_main">
    <img id="side-content-image" src="images/coolcar.jpg">
    <div class="row">
        <div class="col-sm-12">

            <div class="paragraph row">
                <div class="col-sm-12">
                    <h3 class="paragraph">Leave a review</h3>
                </div>
            </div>

            <form id="contact-form" method="post" action="process.php" role="form">

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <div id="name-group" class="form-group">
                            <label for="form_name">Name *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your name *">
                        </div>
                    </div>
                </div>

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <div id="email-group" class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *">
                        </div>
                    </div>
                </div>

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <div id="review-group" class="form-group">
                            <label for="form_review">Review *</label>
                            <textarea id="form_review" name="review" class="form-control" placeholder="Review *" rows="4"></textarea>
                        </div>
                    </div>
                </div>

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <div id="captcha-group" class="form-group">
                            <p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
                            <input class="form-control" type="text" size="6" maxlength="5" name="captcha">
                        </div>
                    </div>
                </div>

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-success btn-send" value="Submit">
                    </div>
                </div>

                <div class="paragraph row">
                    <div class="col-sm-12">
                        <p class="paragraph text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                </div>

            </form>

        </div>
        <div class="paragraph col-sm-12">
            <h3><strong id="reviews">Read </strong><a href="https://www.google.ca/search?q=steves+autotech+reviews&oq=steves+autotech+reviews&aqs=chrome..69i57.6282j0j9&sourceid=chrome&ie=UTF-8#lrd=0x5482620d860b9bef:0xebdd0400202024a6,1,,,"><button style="width:120px; border:solid; border-color:black; background-color:#1a1a1a;" class="button btn btn-info" style="vertical-align:middle"><span>reviews </span></button></a></h3>
        </div>
    </div>
</div>
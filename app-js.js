// magic.js

$(document).ready(function() {

    // process the form
    $('#appointment-form').submit(function(event) {

        $('.form-group').removeClass('has-error'); // remove the error class
        $('.help-block').remove(); // remove the error text

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name' 				: $('input[name=Appname]').val(),
            'email' 			: $('input[name=Appemail]').val(),
            'phone' 	        : $('input[name=Appphone]').val(),
            'vehicle' 	        : $('input[name=Appvehicle]').val(),
            'reason' 	        : $('textarea[name=Appreason]').val(),
            'option1' 	        : $('input[name=option1]').val(),
            'option2' 	        : $('input[name=option2]').val()
            //'captcha'           : $('input[name=captcha]').val()
        };

        // process the form
        $.ajax({
            type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url 		: 'app-process2.php', // the url where we want to POST
            data 		: formData, // our data object
            dataType 	: 'json', // what type of data do we expect back from the server
            encode 		: true
        })
        // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data);

                // here we will handle errors and validation messages
                if ( ! data.success) {

                    // handle errors for name ---------------
                    if (data.errors.Appname) {
                        $('#Appname-group').addClass('has-error'); // add the error class to show red input
                        $('#Appname-group').append('<div class="help-block">' + data.errors.Appname + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for email ---------------
                    if (data.errors.Appemail) {
                        $('#Appemail-group').addClass('has-error'); // add the error class to show red input
                        $('#Appemail-group').append('<div class="help-block">' + data.errors.Appemail + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for phone ---------------
                    if (data.errors.Appphone) {
                        $('#Appphone-group').addClass('has-error'); // add the error class to show red input
                        $('#Appphone-group').append('<div class="help-block">' + data.errors.Appphone + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for vehicle ---------------
                    if (data.errors.Appvehicle) {
                        $('#Appvehicle-group').addClass('has-error'); // add the error class to show red input
                        $('#Appvehicle-group').append('<div class="help-block">' + data.errors.Appvehicle + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for reason ---------------
                    if (data.errors.Appreason) {
                        $('#Appreason-group').addClass('has-error'); // add the error class to show red input
                        $('#Appreason-group').append('<div class="help-block">' + data.errors.Appreason + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for option1 ---------------
                    if (data.errors.option1) {
                        $('#option1').addClass('has-error'); // add the error class to show red input
                        $('#option1').append('<div class="help-block">' + data.errors.option1 + '</div>'); // add the actual error message under our input
                    }

                    // handle errors for option2 ---------------
                    if (data.errors.option2) {
                        $('#option2').addClass('has-error'); // add the error class to show red input
                        $('#option2').append('<div class="help-block">' + data.errors.option2 + '</div>'); // add the actual error message under our input
                    }

                    /*
                    if (data.errors.captcha) {
                        $('#Appcaptcha-group').addClass('has-error');
                        $('#Appcaptcha-group').append('<div class="help-block">' + data.errors.captcha + '</div>');
                    }
                    */


                } else {

                    // ALL GOOD! just show the success message!
                    $('#appointment-form').append('<div class="alert alert-success">' + data.message + '</div>');

                    alert('success'); //alert the user

                }
            })

            // using the fail promise callback
            .fail(function(data) {

                // show any errors
                // best to remove for production
                console.log(data);
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});
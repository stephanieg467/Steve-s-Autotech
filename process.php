<?php

    $errors = array();    // array to hold validation errors
    $data = array();        // array to pass back data


// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array
    if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';
    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';
    if (empty($_POST['review']))
        $errors['review'] = 'Review is required.';
   /*
    if(empty($_POST['captcha']))
        $errors['captcha'] = 'Captcha is required.';


    session_start();

//check that captcha is correct
    if($_POST['captcha'] != $_SESSION['digit'])
        $errors['captcha'] = 'Incorrrect captcha. Try again.';
   */

// return a response ===========================================================
// if there are any errors in our errors array, return a success boolean of false
    if (!empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        // if there are no errors process our form, then return a message
        // DO ALL YOUR FORM PROCESSING HERE

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sareviews";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

//clean data

        $name = $conn->real_escape_string(test_input($_POST['name']));
        $email = $conn->real_escape_string(test_input($_POST['email']));
        $review = $conn->real_escape_string(test_input($_POST['review']));
        $date2 = date("Y/m/d");

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO reviews (name, email, review, date2) VALUES ('  " . $name . "','" . $email . "','" . $review . "','" . $date2 . "  ')";

//just for development to make sure that connection was successful
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } /*else {
            echo "Success";
        }*/

        $conn->close();

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Thank-you for your feedback';
    }
// return all our data to an AJAX call
    echo json_encode($data);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}





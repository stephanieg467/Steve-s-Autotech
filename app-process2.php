<?php
$errors = array();    // array to hold validation errors
$data = array();        // array to pass back data
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array
if (empty($_POST['name']))
    $errors['Appname'] = 'Name is required.';
if (empty($_POST['email']))
    $errors['Appemail'] = 'Email is required.';
if (empty($_POST['phone']))
    $errors['Appphone'] = 'Phone is required.';
if (empty($_POST['vehicle']))
    $errors['Appvehicle'] = 'Vehicle information is required.';
if (empty($_POST['reason']))
    $errors['Appreason'] = 'Please provide a reason for your appointment.';
if (empty($_POST['option1']))
    $errors['option1'] = 'Select a preferred first choice.';
if (empty($_POST['option2']))
    $errors['option2'] = 'Select a preferred second choice.';
/*
if(empty($_POST['captcha']))
    $errors['captcha'] = 'Captcha is required.';
*/

//validate dates
$c = date("Y-m-d");
if (strtotime($_POST['option1']) < strtotime($c))
    $errors['option1'] = 'Invalid date';
if (strtotime($_POST['option2']) < strtotime($c))
    $errors['option2'] = 'Invalid date';
if (strtotime($_POST['option1']) === strtotime($_POST['option2'])) {
    $errors['option1'] = 'Choose different dates';
    $errors['option2'] = 'Choose different dates';
}


/*
session_start();
//validate data
if($_POST['captcha'] != $_SESSION['digit'])
    $errors['captcha'] = 'Incorrect captcha. Try again.';
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
    // Check connection, just for testing
    /*
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    */

    //clean data

    $name = $conn->real_escape_string(test_input($_POST['name']));
    $email = $conn->real_escape_string(test_input($_POST['email']));
    $phone = $conn->real_escape_string(test_input($_POST['phone']));
    $vehicle = $conn->real_escape_string(test_input($_POST['vehicle']));
    $reason = $conn->real_escape_string(test_input($_POST['reason']));
    $Foption = $conn->real_escape_string(strtotime($_POST["option1"]));
    $Foption = date('Y-m-d', $Foption);
    $Loption = $conn->real_escape_string(strtotime($_POST["option2"]));
    $Loption = date('Y-m-d', $Loption);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO appointments (name, email, phone, vehicle, reason, firstoption, secondoption) VALUES ('  " . $name . "','" . $email . "','" . $phone . "','" . $vehicle . "','" . $reason . "','" . $Foption . "','" . $Loption . "  ')";

    //just for testing
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } /*else {
            echo "Success";
        }*/

    $conn->close();

    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Thank-you, we will contact you shortly to confirm your appointment details';
}
// return all our data to an AJAX call
echo json_encode($data);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
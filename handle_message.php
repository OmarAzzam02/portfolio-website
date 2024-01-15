
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
}

//save message in the database
?>
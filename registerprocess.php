<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "butterfly_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$business_name = $_POST['business_name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$username = $_POST['username'];
$farm_permit = $_POST['farm_permit'];
$collector_permit = $_POST['collector_permit'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//Insert user data into database
$sql = "INSERT INTO users (first_name, last_name, business_name, address, email, contact_number, username, password, farm_permit, collector_permit) VALUES ('$first_name', '$last_name', '$business_name', '$address', '$email', '$contact_number', '$username', '$password', '$farm_permit', '$collector_permit')";

// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Generate random OTP code
$otp = mt_rand(100000, 999999);

// Store OTP code in session variable
session_start();
$_SESSION['otp'] = $otp;

// Send OTP code to user's email address
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'butterflyonetwo3@gmail.com'; // Your Gmail email address
    $mail->Password = 'yopcnwloqzdwnala'; // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('butterflonetwo3@gmail.com', 'Your Name'); // Your Name and your Gmail email address
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'OTP Verification';
    $mail->Body = 'Your OTP code is: ' . $otp;

    $mail->send();
    echo 'An OTP has been sent to your email address.';
    header("Location: verify_form.php");

} catch (Exception $e) {
    echo 'Unable to send OTP. Please try again later.';

}

mysqli_close($conn);
?>
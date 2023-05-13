<?php
session_start();

// Verify OTP code
if (isset($_POST['otp'])) {
  $user_otp = $_POST['otp'];
  if ($user_otp == $_SESSION['otp']) {
    echo 'OTP verification successful!';
    // Add code to log the user in or redirect them to a new page
  } else {
    echo 'Invalid OTP code. Please try again.';
  }
}

// Initialize database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "butterfly_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if verification form has been submitted
if (isset($_POST['verification_status'])) {
    
    // Retrieve user ID from form submission
    $user_id = $_POST['user_id'];
    
    // Update user verification status to "verified"
    $sql = "UPDATE users SET verification_status = '1' WHERE id = '$user_id'";
    
    if (mysqli_query($conn, $sql)) {
        echo "User verification status updated successfully!";
    } else {
        echo "Error updating user verification status: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);

?>

?>

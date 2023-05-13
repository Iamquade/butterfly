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
$email = $_POST['email'];
$password = $_POST['password'];

// Verify user credentials
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        // User credentials are correct, start a session
        session_start();
        $_SESSION['email'] = $email;
        header("Location: home.php"); // Redirect to home page
        exit();
    } else {
        // Invalid password
        echo "Invalid password";
    }
} else {
    // Invalid email
    echo "Invalid email";
}

mysqli_close($conn);
?>

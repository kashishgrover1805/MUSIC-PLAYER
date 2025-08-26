<?php
session_start();

// Get user input
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Read user records from file
$lines = file("users.txt", FILE_IGNORE_NEW_LINES);
$found = false;

foreach ($lines as $line) {
    list($saved_username, $saved_email, $saved_password) = explode(",", $line);

    if (
        trim($username) == trim($saved_username) &&
        trim($email) == trim($saved_email) &&
        trim($password) == trim($saved_password)
    ) {
        $found = true;
        $_SESSION['username'] = $username;
        break;
    }
}

if ($found) {
    header("Location: home.php"); // Redirect to homepage
    exit();
} else {
    echo "<script>alert('Login failed! Incorrect details.'); window.location.href='login.php';</script>";
}
?>
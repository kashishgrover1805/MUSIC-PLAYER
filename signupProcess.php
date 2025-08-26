<?php
// Basic validation
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check for @ in email
if (!strpos($email, "@")) {
    echo "<script>alert('Email must contain @'); window.location.href='signup.php';</script>";
    exit();
}

// Check username for numbers
if (preg_match('/[0-9]/', $username)) {
    echo "<script>alert('Username should not contain numbers'); window.location.href='signup.php';</script>";
    exit();
}

// Check password for at least one number
if (!preg_match('/[0-9]/', $password)) {
    echo "<script>alert('Password must contain at least one number'); window.location.href='signup.php';</script>";
    exit();
}

// Save to users.txt
$file = fopen("users.txt", "a");
fwrite($file, "$username,$email,$password\n");
fclose($file);

// Redirect to login
echo "<script>alert('Signup successful! Please login.'); window.location.href='login.php';</script>";
?>
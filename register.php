<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!preg_match("/^[A-Za-z]+$/", $username)) {
    die("Error: Username must not contain numbers.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format.");
}
if (!preg_match("/\d/", $password)) {
    die("Error: Password must contain a number.");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

if ($stmt->execute()) {
    $_SESSION['username'] = $username;
    header("Location: home.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
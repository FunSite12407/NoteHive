<?php
// Start the session
session_start();

// Dummy credentials for demonstration
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable or any other logic
        $_SESSION['username'] = $username;

        // Redirect to index.html
        header("Location: index.html");
        exit();
    } else {
        // Redirect back to login with an error (optional)
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?><?php
// Start the session
session_start();

// Dummy credentials for demonstration
$valid_username = "user";
$valid_password = "password";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable or any other logic
        $_SESSION['username'] = $username;

        // Redirect to index.html
        header("Location: index.html");
        exit();
    } else {
        // Redirect back to login with an error (optional)
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>
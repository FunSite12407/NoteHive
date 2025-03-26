<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nothive";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user'] = $name;
            header("Location: index.php"); // Redirect to index.php
            exit();
        } else {
            echo "Incorrect password.";
            exit();
        }
    } else {
        echo "User not found.";
    }
    $stmt->close();
}

$conn->close();
?>

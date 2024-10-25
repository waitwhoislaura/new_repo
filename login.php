<?php
include('connection.php');
session_start();

// Validate input
if (!isset($_POST['user']) || !isset($_POST['pass'])) {
    header("Location: login_page.php?error=Invalid request");
    exit();
}

$username = $_POST['user'];
$password = $_POST['pass'];

// Prepare and bind
$stmt = $con->prepare("SELECT * FROM users WHERE user = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["user"] = $username;
    header("Location: solver_page.php");
    exit();
} else {
    header("Location: login_page.php?error=Invalid username or password");
    exit();
}

$stmt->close();
$con->close();
?>

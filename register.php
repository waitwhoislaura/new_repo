<?php
include('connection.php');

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$password = password_hash($password, PASSWORD_DEFAULT);

// Check if the username or email already exists
$stmt = $con->prepare("SELECT * FROM users WHERE user = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username or email already exists
    header("Location: register_page.php?error=Username or email already exists");
    echo '<script language="javascript">';
    echo 'alert("Username or email already exists")';
    echo '</script>';
    exit();
}

// Prepare and bind the INSERT statement
$stmt = $con->prepare("INSERT INTO users (user, pass, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);

// Attempt to execute the prepared statement
if ($stmt->execute()) {
    header("Location: login_page.php");
    exit();
} else {
    header("Location: register_page.php?error=Failed to register");
    $php_errormsg= "Failed to register";
    exit();
}

// Close statement and connection
$stmt->close();
$con->close();
?>
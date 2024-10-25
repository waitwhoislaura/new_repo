<?php
session_start();
if($isset($_POST['action'])){
    session_destroy();
    // Redirect to the login page:
    header('Location: login_page.php');
}
?>


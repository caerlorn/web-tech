<?php
session_start();

if ($_SESSION['isLoggedIn'] !== true) {
    $_SESSION['error_message'] = 'You must be logged in!';
    header('Location: /project15/login.php');
}

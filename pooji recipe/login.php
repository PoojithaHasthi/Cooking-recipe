<?php
session_start();

$valid_username = 'admin';
$valid_password = 'password';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        
        header("Location: index.html");
        exit;
    } else {
        header("Location: login.html?error=1");
        exit;
    }
}
?>
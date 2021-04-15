<?php

session_start();

// check if user is logged in
if (isset($_SESSION["loggedin"]) and $_SESSION["loggedin"] === true) {
    header("Location:home.php");
    exit;
}
include "config.php";

if (isset(
    $_POST['email'],
    $_POST['password']
)) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT `email`, `password` FROM `users` WHERE email='$email'";

    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $row = mysqli_fetch_array($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $email;
            $_SESSION['start'] = "Welcome you are logged in";
            header("Location:home.php");
        } else {
            echo "Wrong Password";
        }
    }
}

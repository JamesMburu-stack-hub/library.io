<?php
session_start();

// check if user has logged in
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
    header("Location:login.php");
    exit;
}

include "config.php";

if (isset(
    $_POST["submitdata"]
)) {
    $new_password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    //    validate password

    if (strlen($new_password) < 6) {
        $new_password_error = "Password must have 6 characters";
        echo $new_password_error;
    } else {
        $store_new_password = password_hash($new_password, PASSWORD_BCRYPT);
    }

//    validate confirm password
    if ($confirmpassword != $new_password) {
        $confirmpassword_error = "Passwords do not match";
        echo $confirmpassword_error;
    } else {
        $store_confirmpassword = password_hash($confirmpassword, PASSWORD_DEFAULT);
    }

    // fetch session user
    $user_email = $_SESSION['email'];

    if (empty($new_password_error and empty($confirmpassword_error))) {
        $sql = "UPDATE `users` SET `password`=`$store_new_password` WHERE email='$user_email' ";
        $result = mysqli_query($link, $sql);

        if ($result) {
            echo "User password updated successfully";
        } else {
            echo "ERROR.$sql" . mysqli_error($link);
        }
    }
}
<?php
include "config.php";

if (isset(
    $_POST["name"],
    $_POST["email"],
    $_POST["password"],
    $_POST["re_password"]
)) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $re_password = trim($_POST["re_password"]);

    // validate password
    if (strlen($password) < 6) {
        $password_error = "Password must have at least 6 characters";
        echo $password_error;
    } else {
        $store_password = password_hash($password, PASSWORD_DEFAULT);
    }

    // validate confirm password
    if ($re_password != $password) {
        $re_password_error = "Passwords not matching";
        echo $re_password_error;
    } else {
        $store_re_password = password_hash($re_password, PASSWORD_DEFAULT);
    }

    // check for errors before inserting data entries
    if (empty($password_error) and empty($re_password_error)) {
        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$store_password')";

        $result = mysqli_query($link, $sql);

        if ($result) {
            echo "Registration successful";
            header("Location:login.php");
        } else {
            echo "ERROR executing.$sql" . mysqli_connect_error();
        }
    }

    // close connection
    mysqli_close($link);
}
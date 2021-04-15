<?php

session_start();

//// check if user has logged in
//if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
//    header("Location:login.php");
//    exit;
//}

include "config.php";

if (isset($_POST["uploaddata"])) {

    $ISBN = trim($_POST["ISBN"]);
    $Book_title = trim($_POST["Book_title"]);
    $Author = trim($_POST["Author"]);

    // uploading image
    $picname = $_FILES["cover"]["name"];
    $temp_name = $_FILES["cover"]["tmp_name"];
    $folder = "images/$picname";

    $sql = "INSERT INTO `books`(`ISBN`, `Book_title`, `Author`, `cover`)  VALUES ('$ISBN','$Book_title','$Author','$picname')";

    $result = mysqli_query($link, $sql);


    // uploading image to folder
    if (move_uploaded_file($temp_name, $folder)) {
        echo "Photo uploaded successfully";
    } else {
        echo "ERROR uploading!!";
    }

    if ($result) {
        echo "Your upload was successful";
        header("Location:home.php");
    } else {
        echo "Upload data error $sql" . mysqli_error($link);
    }

}

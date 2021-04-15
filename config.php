<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'library management');

$link = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);

if ($link == false) {
    die("ERROR CONNECTING TO SERVER" . mysqli_connect_error());
}

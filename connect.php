<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'notes';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(

    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);
?>

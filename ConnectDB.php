<?php
    session_start();
    $username = "";
    $email = "";
    $errors = [];
    //connecting to DB
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "user";
    $conn = mysqli_connect($host, $user, $password, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
<?php
    session_start();
    $username = "";
    $email = "";
    //connecting to DB
    $host = "sql11.freesqldatabase.com";
    $user = "sql11496381";
    $password = "IURWgmMvUY";
    $db = "sql11496381";
    $conn = mysqli_connect($host, $user, $password, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    
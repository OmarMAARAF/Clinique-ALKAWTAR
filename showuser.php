<?php
    if($_SESSION['verified'] == 0){
        header('location: not_verified.php');
        exit(0);
    }
    else{
        echo "Welcome, ".$_SESSION['username']."!";

    }
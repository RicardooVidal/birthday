<?php

    $servername = "10.0.1.2";
    $username = "ricardo";
    $password = "tritium612";
    $dbname = "birthday";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    return $conn;

    //$link = mysqli_connect("10.0.1.2", "ricardo", "tritium612", "birthday");
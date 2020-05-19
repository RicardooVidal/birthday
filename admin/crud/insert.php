<?php
    require ("../../config/database.php");
    
    $username = $_POST["login"];
    $password = $_POST["senha"];
    $name = $_POST["nome"];
    $botID = $_POST["botID"];
    $chatID = $_POST["chatID"];
    $defaultToken = $_POST["defaultToken"];

    $sql = "INSERT INTO users (username, name, password, botID, chatID, defaultToken)
            VALUES ('$username', '$name', '$password', '$botID', '$chatID', '$defaultToken')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location:/birthday/admin/index.php?status=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
<?php
    require ("../config/database.php");
    include '../check_session.php';
    $name = ucfirst($_POST["nome"]);
    $lastname = ucfirst($_POST["sobrenome"]);
    $obs = $_POST["observacao"];
    $years_old = $_POST["idade"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];

    $sql = "INSERT INTO $dbuser (firstname, lastname, obs, years, day, month)
            VALUES ('$name', '$lastname', '$obs', '$years_old', '$dia', '$mes')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('location:../insert.php?status=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
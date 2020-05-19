<?php
    require ("../config/database.php");
    include '../check_session.php';
    $id = $_POST["id"];
    echo $id;
    $sql = "DELETE FROM $dbuser WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location:../view.php?status=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
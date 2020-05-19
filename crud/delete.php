<?php
    require ("../config/database.php");
    
    $id = $_POST["id"];
    echo $id;
    $sql = "DELETE FROM birthday WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location:../view.php?status=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
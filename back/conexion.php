<?php
    $hostname = "localhost:8889";
    $username = "root";
    $password = "root";
    $db = "learnug";
    // Create connection
    $conn = new mysqli($hostname, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
    }
?>
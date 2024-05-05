<?php
    echo "Testing a PHP Apache Docker";
    
    // connection of database
    $host = 'same as .env file';
    $user = 'same as .env file';
    $pass = 'same as .env file';
    $db = 'same as .env file';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected to MySQL successfully";

    $conn->close();
?>
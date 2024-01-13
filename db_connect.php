<?php
    $servername = "localhost";
    $username = "root";
    $password = "ivansorra11"; // you can change this if your mysql server doesnt have a password
    $dbname = "lyrics_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
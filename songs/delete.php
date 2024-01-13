<?php
$hostname = "localhost";
$username = "root";
$password = "ivansorra11";
$db = "lyrics_db";
$port = 3306;

$conn = new mysqli($hostname, $username, $password, $db, $port);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

// Check if an id parameter is provided in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Delete the song from the database
    $query = "DELETE FROM songs WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        header("Location: home.php");
        exit(); // Ensure that no further code is executed after the header
    } else {
        echo '<div class="alert alert-danger" role="alert">Error deleting song: ' . $conn->error . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request. No ID specified.</div>';
}

$conn->close();
?>

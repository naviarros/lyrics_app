<?php
include "../db_connect.php";

// Check if the form is submitted for updating the song
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $artist = $_POST["artist"];
    $lyrics = $_POST["lyrics"];

    // Update the song in the database
    $query = "UPDATE songs SET title=?, artist=?, lyrics=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $title, $artist, $lyrics, $id);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">Song updated successfully!</div>';
        header("Location: home.php");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating song: ' . $stmt->error . '</div>';
    }

    $stmt->close();
}

// Check if an id parameter is provided in the URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Fetch details of the selected song
    $query = "SELECT * FROM songs WHERE id=$id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo '<div class="alert alert-danger" role="alert">Song not found!</div>';
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Song</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Edit Song</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" required>
        </div>

        <div class="form-group">
            <label for="artist">Artist:</label>
            <input type="text" class="form-control" id="artist" name="artist" value="<?php echo $row['artist']; ?>" required>
        </div>

        <div class="form-group">
            <label for="lyrics">Lyrics:</label>
            <textarea class="form-control" id="lyrics" name="lyrics" rows="5" required><?php echo $row['lyrics']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

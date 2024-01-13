<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the song title" required>
    </div>

    <div class="form-group">
        <label for="artist">Artist:</label>
        <input type="text" class="form-control" id="artist" name="artist" placeholder="Enter the artist name" required>
    </div>

    <div class="form-group">
        <label for="lyrics">Lyrics:</label>
        <textarea class="form-control" id="lyrics" name="lyrics" rows="5" placeholder="Enter the lyrics" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    include "../db_connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $title = $_POST["title"];
        $artist = $_POST["artist"];
        $lyrics = $_POST["lyrics"];

        $query = "INSERT INTO songs (title, artist, lyrics) VALUES ('$title', '$artist', '$lyrics')";

        if ($conn->query($query) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Song saved successfully!</div>';
            header("Location: home.php");
            exit;
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $conn->error . '</div>';
        }
    }
?>
<?php
    include "../db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Songs Database</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-a bg-dark">
    <a class="navbar-brand text-info" href="./home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="container-fluid mt-5 pl-5">
    <a href="javascript:void(0)" class="btn btn-primary" onclick="loadPage('create.php')">Create a Song</a>
    <div class="mt-4" id="content-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Lyrics</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM songs";

                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['artist']; ?></td>
                                <td><?php echo $row['lyrics']; ?></td>
                                <td><?php echo $row['date_created']?></td>
                                <td>
                                    <!-- Add any actions you want for each row -->
                                    <!-- Example: Edit and Delete links -->
                                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        // Display a message if no records are found
                        echo "<tr><td colspan='4'>No records found</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                ?>  
            </tbody>
        </table>
    </div>
</div>

<!-- Your page content goes here -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function loadPage(page) {
        fetch(page)
            .then(response => response.text())
            .then(data => {
                document.getElementById('content-container').innerHTML = data;
            })
            .catch(error => {
                console.error('Error loading content:', error);
            });
    }
</script>
</body>
</html>

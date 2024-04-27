<?php
include 'db.php';

// Retrieve books from database
$sql = "SELECT id, title, author, year, genre, description FROM books";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <table border="1">
        <tr>
            <th>Book Number</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Description</th>
        </tr>
        <?php
        // Display books in a tabular format
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo  "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>


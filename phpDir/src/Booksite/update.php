<?php include 'db.php';

$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Query failed');
}

// Handle form submission
if (isset($_POST['submit'])) {
  // Retrieve form data
  $id = $_POST['id'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $year = $_POST['year'];
  $genre = $_POST['genre'];
  $description = $_POST['description'];

  // Prepare UPDATE statement
  $query = "UPDATE books SET ";
  $query .= "title = '$title', ";
  $query .= "author = '$author', ";
  $query .= "year = '$year', ";
  $query .= "genre = '$genre', ";
  $query .= "description = '$description' ";
  $query .= "WHERE id = $id";

  // Execute UPDATE query
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Update query failed: " . mysqli_error($conn));
  } else {
    // Redirect to book list page after successful update
    header("Location: booksite.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
</head>
<body>
    <h1>Update Book</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo isset($row['title']) ? $row['title'] : ''; ?>"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="<?php echo isset($row['author']) ? $row['author'] : ''; ?>"><br>
        <label for="year">Year:</label><br>
        <input type="number" id="year" name="year" value="<?php echo isset($row['year']) ? $row['year'] : ''; ?>"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre" value="<?php echo isset($row['genre']) ? $row['genre'] : ''; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required><?php echo isset($row['description']) ? $row['description'] : ''; ?></textarea><br>
        <input type="submit" name="submit" value="Update Book">
    </form>
</body>
</html>

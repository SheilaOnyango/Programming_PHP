<?php
include 'db.php'; 

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    // Prepare an INSERT statement with placeholders
    $stmt = $conn->prepare("INSERT INTO books (title, author, year, genre, description) VALUES (?, ?, ?, ?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die('Error: ' . $conn->error); // Display error message and terminate script
    }

    // Bind the form data to the prepared statement parameters
    $stmt->bind_param("ssiss", $title, $author, $year, $genre, $description);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to the same page after successful insertion
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit; // Stop script execution after the redirect
    } else {
        // Handle errors during execution
        die('Query insertion failed: ' . $stmt->error);
    }

    // Close the prepared statement
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="year">Year:</label><br>
        <input type="number" id="year" name="year"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" name="submit" value="Add Book">
    </form>
</body>
</html>

<?php
include 'db.php'; 

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Retrieve book ID from the form
    $id = $_POST['id'];

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");

    // Bind the book ID parameter to the prepared statement
    $stmt->bind_param("i", $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect to the same page after successful deletion
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit; // Stop script execution after the redirect
    } else {
        // Handle errors during execution
        die('Query deletion failed');
    }

    // Close the prepared statement
    $stmt->close();
}

// Retrieve books from database
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
</head>
<body>
    <h1>Delete Book</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="id">Book ID:</label><br>
        <select id="id" name="id">
            <?php 
            // Display book IDs in dropdown menu for selection
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
            }
            ?>
        </select><br>
        <input type="submit" name="submit" value="Delete Book">
    </form>

</body>
</html>

<?php
/* Write your code here */


?>
<!DOCTYPE html>
<html>

<head>
  <title>if else if Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php
  $stock = 0;
  $ordered = 0;
  //$message = ($stock > 0) ? 'In stock': 'Sold out';
  if ($stock > 0) {
    $message = 'In stock';
  } elseif ($ordered > 0) {
    $message = 'Coming soon...';
  } else {
    $message = 'Sold out';
  }

?>


</body>

</html>
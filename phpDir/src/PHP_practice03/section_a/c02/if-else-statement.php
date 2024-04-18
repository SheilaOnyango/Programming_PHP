<?php
/*
Write your code here
*/
$name = "James";
$greeting = "Hello";
if ($name !== '') {
  $greeting = 'Welcome back, ' . $name;
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  

  <h2><?= $greeting ?></h2>
  
</body>

</html>
<?php

/* 
  Write you php code here

   */
  $quantityInStock = "100";
  $customerOrder = "150";

  $comparison = $customerOrder <= $quantityInStock;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Quantity in Stock:<? echo $quantityInStock; ?></p>
  <p>Customer Order:<? echo $customerOrder; ?></p>
 <p> <? echo $comparison; ?> </p>

</body>

</html>
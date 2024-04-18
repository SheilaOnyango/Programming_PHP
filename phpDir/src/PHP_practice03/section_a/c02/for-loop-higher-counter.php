<?php
/* Write your code here */
$price_per_pack = 20;

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    /* Write your code here */
    for ($packs = 10; $packs <= 100; $packs += 10) {
      $total_price = $packs * $price_per_pack;
      echo "<p>$packs packs cost $total_price</p>";
  }
    ?>
  </p>
</body>

</html>
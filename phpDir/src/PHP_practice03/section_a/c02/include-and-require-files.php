<?php
/* Write your code here */
$stock = 3;

if ($stock >=10) {
  $message = "Good availability";
}
if ($stock > 0 && $stock < 10) {
  $message = 'Low stock';
}
if ($stock == 0) {
  $message = 'Out of stock';
}
?>


<h2>Chocolate</h2>
<?php require_once 'includes/header.php'; ?>

<p> <?= $message ?></p>

<?php include 'includes/footer.php'; ?>
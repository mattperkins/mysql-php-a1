<?php

// connect to db
include_once('includes/dbconnect.php');


// check GET request id param
if(isset($_GET['id'])){
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  // make sql

  // get data from db
  $sql = "SELECT * FROM products WHERE id = $id;";

  // make query and get result
  $result = mysqli_query($conn, $sql);

  // fetch result in associative arrray format
  $product = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);

  // check db sql request works 
  // print_r($product);
}


// view 
$metaTitle = "MySQL PHP A1 - Details";
  ob_start();
?>

<h3>Details</h3>

<div>
  <?php if($product): ?>
    <h4><?php echo htmlspecialchars($product['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($product['email']); ?></p>
    <p><?php echo date($product['created_at']); ?></p>
    <h5>Product Details</h5>
    <p><?php echo htmlspecialchars($product['details']); ?></p>
  <?php else: ?>
    <p>No products found in database</p>
  <?php endif ?>
</div>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>

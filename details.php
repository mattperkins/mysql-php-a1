<?php

// connect to db
include_once('includes/dbconnect.php');

if(isset($_POST['delete-product'])) {

  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

  $sql = "DELETE FROM products WHERE id = $id_to_delete";

  if(mysqli_query($conn, $sql)){
    // success
    header('Location: index.php');
  } else {
    // failure
    echo 'query error: ' . mysqli_error($conn);
  }
}

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

    <!-- delete $product '// required for db delete -->
  <form action="details.php" method="POST">
    <input type="hidden" name="id_to_delete" value="<?php echo $product['id']; ?>">
    <input class="btn btn-danger" type="submit" name="delete-product" value="DELETE"/>
  </form>

  <?php else: ?>
    <p>No products found in database</p>
  <?php endif ?>
</div>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>

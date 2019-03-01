<?php

// connect to db
include_once('includes/dbconfig.php');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

// $sql = "SELECT * FROM products"
// query all rows in db table products
$sql = "SELECT email, title, details, id FROM products ORDER BY created_at;";

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows(records) as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);
// close db connection
mysqli_close($conn);

// render the results associative arrays to page
// print_r($products);

// print_r(explode(' ', $products[2]['details']));

// view 
$metaTitle = "MySQL PHP A1";
ob_start();
?>

<main class="container">

<h3>Rendered data from db (added via phpmysql)</h3>

<div class="row">
    
  <!-- render db data entered via phpmyadmin/sql -->
  <?php foreach($products as $product) : ?>
    
    <div class="col-md-4">
      <div class="card z-depth-0">
        <div class="card-content center">
          <h6>
            <?php echo htmlspecialchars($product['title']); ?>
          </h6>
          <h6>
            <?php echo htmlspecialchars($product['details']); ?>
          </h6> 
        </div>
        <div class="card-action right-align">
          <a href="#" class="brand-text">more info</a>
        </div>
      </div>
    </div>
      
  <?php endforeach; ?> 
  
  
</div>
</main>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>

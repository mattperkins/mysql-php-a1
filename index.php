<?php

// connect to db
include_once('includes/dbconfig.php');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

// write query for all products
// $sql = "SELECT * FROM products"
$sql = "SELECT email, title, details, id FROM products;";

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows(record) as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);
// close db connection
mysqli_close($conn);

// render the results associative arrays to page
print_r($products);

// view 
$metaTitle = "MySQL PHP A1";
ob_start();
?>

<main>
   <div>
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

<div>
  <h2>Further information</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

</main>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>

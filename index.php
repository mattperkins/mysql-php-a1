<?php

// connect to db
$conn = mysqli_connect('localhost', 'admin', 'test1234', 'lemon_products');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

// write query for all products
// $sql = "SELECT * FROM products"
$sql = "SELECT email, title, details, id FROM products";

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

<?php 
// session_start();
// echo $_SESSION["username"];

// connect to db
include_once('includes/dbconfig.php');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

// view
$metaTitle = "MySQL PHP A1 - Contact";
$content = "<main>
   <div>
  <h1>Contact</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

</main>";


include "master.php"; 
?>

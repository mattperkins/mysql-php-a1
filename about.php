<?php
  // include in header so session persists across entire site 
  session_start();

// instantiate session
$_SESSION["username"] = "fred4";
// echo $_SESSION["username"];

if(!isset($_SESSION["username"])){
  echo "You are not logged in";
} else {
  echo "You are now logged in";
}

// connect to db
include_once('includes/dbconfig.php');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

// get data from db
$sql = "SELECT * FROM posts;";
// make query and get result
$getData = mysqli_query($conn, $sql);
// check for data in db table rows
$postDataCheck = mysqli_num_rows($getData);
if($postDataCheck > 0) {
  while($row = mysqli_fetch_assoc($getData)){
    echo '<br />' . $row['subject'];
  }
}






// view
$metaTitle = "MySQL PHP A1 - About";
$content = "<main>
   <div>
  <h1>About</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

</main>";

include "master.php"; 
?>

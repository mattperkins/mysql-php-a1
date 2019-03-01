<?php 

// view 
$metaTitle = "MySQL PHP A1 - Contact";
ob_start();
?>

<h3>dbAdd form (no validation)</h3>
<!-- submits data to db -->
<form action="includes/dbadd.php" method="POST">
  <input type="text" name="subject" placeholder="Add a subject">
  <input type="text" name="content" placeholder="Add content">
  <button type="submit" name="submit">Add to Database</button>
</form>


<?php 
$content = ob_get_clean();
include "master.php"; 
?>
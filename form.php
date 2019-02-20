<?php 
$title = "MySQL PHP A1";
ob_start();
?>

<?php 
  if(isset($_POST['submit'])){
    echo $_POST['email'];
    echo $_POST['title'];
    echo $_POST['details'];
  }
 ?>
<form action="form.php" method="POST">
  <label>Your Email</label>
  <input type="text" name="email">
  <label>Your Title</label>
  <input type="text" name="title">
  <label>Your Details</label>
  <input type="text" name="details">
  
  <input class="button" type="submit" name="submit" value="submit">
</form>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>


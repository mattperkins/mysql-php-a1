<?php 
$title = "MySQL PHP A1";
ob_start();
?>

<?php 
  
  if(isset($_POST['submit'])){
    // check email
    if(empty($_POST['email'])){
      echo 'An email is required <br />';
    } else {
      echo htmlspecialchars($_POST['email']) . '<br />';
    }
    // check title
    if(empty($_POST['title'])){
      echo 'A title is required <br />';
    } else {
      echo htmlspecialchars($_POST['title']) . '<br />';
    }
    // check email
    if(empty($_POST['details'])){
      echo 'Details are required <br />';
    } else {
      echo htmlspecialchars($_POST['details']) . '<br />';
    }
  } // end form POST validation

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


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
      // echo htmlspecialchars($_POST['email']) . '<br />';
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'A valid email is required <br />';
      }
    }
    // check title
    if(empty($_POST['title'])){
      echo 'A title is required <br />';
    } else {
      // echo htmlspecialchars($_POST['title']) . '<br />';
      $title = $_POST['title'];
      // regex = letters and spaces
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        echo "Title must be letters and spaces only";
      }
    }
    // check email
    if(empty($_POST['details'])){
      echo 'Details are required <br />';
    } else {
      // echo htmlspecialchars($_POST['details']) . '<br />';
      $details = $_POST['details'];
      // regex = comma seperated words
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $details)){
        echo "Details must be comma seperated";
      }
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


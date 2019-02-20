<?php 
$metaTitle = "MySQL PHP A1";
ob_start();
?>

<?php 
  $email = $title = $details = '';
  $errors = ['email'=>'', 'title'=>'', 'details'=>''];

  if(isset($_POST['submit'])){
    // check email
    if(empty($_POST['email'])){
      $errors['email'] = 'An email is required <br />';
    } else {
      // echo htmlspecialchars($_POST['email']) . '<br />';
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'A valid email is required <br />';
      }
    }
    // check title
    if(empty($_POST['title'])){
      $errors['title'] = 'A title is required <br />';
    } else {
      // echo htmlspecialchars($_POST['title']) . '<br />';
      $title = $_POST['title'];
      // regex = letters and spaces
      if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        $errors['title'] = "Title must be letters and spaces only";
      }
    }
    // check email
    if(empty($_POST['details'])){
      $errors['details'] = 'Details are required <br />';
    } else {
      // echo htmlspecialchars($_POST['details']) . '<br />';
      $details = $_POST['details'];
      // regex = comma seperated words
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $details)){
        $errors['details'] = "Details must be comma seperated";
      }
    }
  } // end form POST validation

 ?>

<form action="form.php" method="POST">
  <label>Your Email</label>
  <input type="text" name="email" value="<?php echo $email; ?>">
  <div class="error" style="color: red;"><?php echo $errors['email']; ?></div>

  <label>Your Title</label>
  <input type="text" name="title" value="<?php echo $title; ?>">
  <div class="error" style="color: red;"><?php echo $errors['title']; ?></div>

  <label>Your Details</label>
  <input type="text" name="details" value="<?php echo $details; ?>">
  <div class="error" style="color: red;"><?php echo $errors['details']; ?></div>

  <input class="button" type="submit" name="submit" value="submit">
</form>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>


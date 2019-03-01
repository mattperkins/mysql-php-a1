<?php 

// connect to db
include_once('includes/dbconnect.php');

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
    // if no errors : returns false || if errors : returns true
    if(array_filter($errors)){
      echo 'There are errors in the form';
    } else {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $details = mysqli_real_escape_string($conn, $_POST['details']);
      
      // create sql
      $sql = "INSERT INTO products(email,title,details) VALUES('$email', '$title', '$details')"; 

      // save to db and check
      if(mysqli_query($conn, $sql)) {
        // success
        header('Location: index.php'); 
      } else {
        // error
        echo "Query error: " . mysqli_error($conn);
      }
    }

  } // end form POST validation

 ?>
<h3>Form validates and saves data to db</h3>
<!-- validation only / doesnt post data to db yet -->
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


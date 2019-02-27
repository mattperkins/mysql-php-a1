

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $metaTitle ?></title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='style.css'>
</head>
<body>
<header>
  <?php 
    if((@include "nav.php") === FALSE) {
      echo '<p class="file-missing">File missing, please contact: <a href="webmaster@dormshed.com">webmaster@dormshed.com</a></p>';
    } 
  ?>
</header> 

<?php echo $content; ?>

<footer>
  <?php 
    if((@include "footer.php") === FALSE) {
       echo '<p class="file-missing">File missing, please contact: <a href="webmaster@dormshed.com">webmaster@dormshed.com</a></p>';
    } 
  ?>
</footer>
</body>
</html>
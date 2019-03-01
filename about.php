<?php

// connect to db
include_once('includes/dbconnect.php');

// get data from db
$sql = "SELECT * FROM posts;";
// make query and get result
$getData = mysqli_query($conn, $sql);

// view 
$metaTitle = "MySQL PHP A1 - About";
  ob_start();
?>

<h3>db data from Add form</h3>

<?php 
// renders data from db input from contact.php form
// check for data in db and render table rows
$postDataCheck = mysqli_num_rows($getData);
if($postDataCheck > 0) {
  while($rows = mysqli_fetch_assoc($getData)){ ?>
    <div style="display: flex;">
      <p style="margin-right: 3px;">
        <?php echo htmlspecialchars($rows['subject']); ?>
      </p>
      <p>
        <?php echo htmlspecialchars($rows['content']); ?>
      </p>
    </div>
  <?php }
} else { ?> 
   <div>
     <?php 
      echo "No data available"; 
    ?>
   </div> 
<?php }



$content = ob_get_clean();
include "master.php"; 
?>

<?php 
$title = "MySQL PHP A1";
ob_start();
?>

<main>
   <div>
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

<div>
  <h2>Further information</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quidem rerum architecto maiores veritatis deserunt dignissimos illum culpa quisquam reiciendis perferendis placeat laudantium nisi temporibus reprehenderit labore aut, accusantium sapiente?</p>
</div>

</main>

<?php 
$content = ob_get_clean();
include "master.php"; 
?>

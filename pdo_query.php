<?php 
// connect to db
include_once('includes/dbconnect.php');
include_once('includes/dbconfig.php');

//  set data source name (DSN)
$dsn = 'mysql:host='. $DBHOST .';dbname=' . $DBNAME;

// create PDO instance
$pdo = new PDO($dsn, $DBUSER, $DBPASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// PDO query
$stmt = $pdo->query('SELECT * FROM Users');

  // fetch as an array
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//   echo $row['title'] . '<br />';
// }

  // fetch as an object
// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//   echo $row->title . '<br />';
// }

// fetch now using setAttribute/configured FETCH_OBJ above 
while($row = $stmt->fetch()){
  echo $row->title . '<br />';
}
?>
<h3>Prepared Statements - CRUD and Search</h3>
<a href="pdo_prepared_statements_positional.php">Positional</a>
<a href="pdo_prepared_statements_positional_all.php">All</a>
<a href="pdo_prepared_statements_named.php">Named</a>
<a href="pdo_prepared_statements_named_single.php">Single</a>
<a href="pdo_crud_and_search.php">CRUD/Search</a>

<p>Database results:</p>
<code>Uncomment code to render CRUD functionality</code><p />

<?php 
// connect to db
include_once('includes/dbconnect.php');
include_once('includes/dbconfig.php');

//  set data source name (DSN)
$dsn = "mysql:host=$DBHOST;dbname=$DBNAME;charset=utf8";
// create PDO instance
try {
  $pdo = new PDO($dsn, $DBUSER, $DBPASS);
  // var_dump($dsn);
}
catch(Exception $e) {
  // echo $e->getMessage();
  echo "An error has occurred.";
}


$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// required when using LIMIT in SQL query
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


// CRUD

// Create
$title = "Faith equation";
$body = "From whence the glory came and until the mount is once again populated";
$author = "JC";
//$sql = "INSERT INTO Users(title, body, author) VALUES(:title, :body, :author)";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
  // echo 'User added';


// Read
$sql = "SELECT * FROM Users";
$stmt = $pdo->prepare($sql);
$stmt->execute([$sql]);
$users = $stmt->fetchAll();

foreach($users as $user){
  echo "<p />" . $user->title;
}


// Update
$id = 1;
$title = 'Updating the title of post id 1';
//$sql = "UPDATE Users SET title = :title WHERE id = :id";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'id' => $id]);
  // echo 'Post Updated';


// Delete
$id = 8;
//$sql = "DELETE FROM Users WHERE id = :id";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post deleted';


// Search    (using the LIKE operator)
$search = "%faith%";
// $sql = "SELECT * FROM Users WHERE title LIKE ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//   echo $user->title . "<br />";
// }


// Limit
// $limit = 1;
// $sql = "SELECT * FROM Users WHERE author = ? LIMIT ?";
// // $sql = "SELECT * FROM Users";
// $stmt = $pdo->prepare($sql);
// // $stmt->execute([$sql]);
// $stmt->execute([$author, $limit]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//   echo $user->title . "<br />";
// }
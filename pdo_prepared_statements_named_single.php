<h3>Prepared Statements - Named(Single)</h3>
<a href="pdo_prepared_statements_positional.php">Positional</a>
<a href="pdo_prepared_statements_positional_all.php">All</a>
<a href="pdo_prepared_statements_named.php">Named</a>
<a href="pdo_prepared_statements_named_single.php">Single</a>
<a href="pdo_crud_and_search.php">CRUD/Search</a>

<p>Database results:</p>

<?php 
// connect to db
include_once('includes/dbconnect.php');
include_once('includes/dbconfig.php');

//  set data source name (DSN)
$dsn = 'mysql:host='. $DBHOST .';dbname=' . $DBNAME;

// create PDO instance
$pdo = new PDO($dsn, $DBUSER, $DBPASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// Prepared Statements (prepare and execute)
// Seperates instruction from data

// unsafe approach <- never use the following:
// $sql = "SELECT * FROM Users WHERE author = '$author'";
  
// fetch Users with prepared statements approach:
// positional parameters or named parameters

// User input 
$id = 3;

  // Named Parameters ( method using : )
$sql = "SELECT * FROM Users WHERE id = :id";
$stmt = $pdo->prepare($sql);
  // array variable replaces the ? above
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();


  // display all raw db data to screen
// var_dump($users);

  echo '<p />' . $user->title . '<br />';
?>

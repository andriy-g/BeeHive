
<?php



  $username = "andriyg_db";;
  $password = "PASSWORD";
  $hostname = "localhost";
  $database = "andriyg_bee_database";

  try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
      echo 'Connected to database';
  }
  catch(PDOException $e) {
    echo 'Connection error:' . $e->getMessage();
  }

include 'models/beedatabasemodel.php';

$model = new beedatabaseModel($dbh);
$allRows = $model->getAllEntries();
include 'views/beedataview.php';
$db = null;

 ?>

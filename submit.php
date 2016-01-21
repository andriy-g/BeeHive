<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data  Submitted</title>
  </head>
  <body>

    <?php
      $hiveid = $_POST['hiveid'];
      $date = $_POST['date'];
      $sampleperiod = $_POST['sampleperiod'];
      $numofmites = $_POST['numofmites'];

      echo "<p>Your hive ID " . $hiveid . "</p>";
      echo "<p>Your date: " . $date . "</p>";
      echo "<p>Your sample period: " . $sampleperiod . "</p>";
      echo "<p>Your number of mites: " . $numofmites . "</p>";


      //Instantiate a database object. Repalces db.php version

      $username = "andriyg_db";
    $password = "PAssWord";
      $hostname = "localhost";
      $database = "andriyg_bee_database";



      try {
        $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
          echo 'Connected to database';
      }
      catch(PDOException $e) {
        echo 'Connection error:' . $e->getMessage();
      }

      //Define the query
      $query = "INSERT INTO bee_sample_data (hive_id, collection_date, sample_period, number_mites) VALUES(:hiveid, :date, :sampleperiod, :numofmites)";

      //Prepare the statement
      $statement = $dbh->prepare($query);

      //Bing the parameters
      $statement->bindParam(':hiveid', $hiveid, PDO:: PARAM_INT);
      $statement->bindParam(':date', $date, PDO:: PARAM_STR);
      $statement->bindParam(':sampleperiod', $sampleperiod, PDO:: PARAM_INT);
      $statement->bindParam(':numofmites', $numofmites, PDO:: PARAM_INT);

      //Execute
      $success = $statement->execute();

      ?>

  </body>
</html>

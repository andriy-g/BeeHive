<?php

  $username = "andriyg_db";;
  $password = "PASSWORD";
  $hostname = "localhost";
  $database = "andriyg_bee_database";

    $cnxn = @mysqli_connect($hostname, $username, $password,
                            $database)
            or die("Error connecting to database: " .
                    mysqli_connect_error());

    echo 'Connected to database';
?>

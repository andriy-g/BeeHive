<?php
    $username = "Username";
    $password = "DONT EVEN THINK ABOUT IT";
    $hostname = "localhost";
    $database = "_bee_database";

    $cnxn = @mysqli_connect($hostname, $username, $password,
                            $database)
            or die("Error connecting to database: " .
                    mysqli_connect_error());

    echo 'Connected to database';
?>

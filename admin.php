<?php

$db = new PDO(...);

include 'models/beedatabasemodel.php';

$model = new DataModel($db);
$allRows = $model->getAllRows();
include 'views/showall.php';
$db = null;

 ?>

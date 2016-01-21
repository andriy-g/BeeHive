<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta charset="utf-8">
    <title>Bee Data View</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4> Contacts List </h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                <th>Hive ID</th>
                <th>Collection Date</th>
                <th>Sample Period</th>
                <th>Number of Mites</th>
              </thead>
              <tbody>
     <tbody>
      <?php
      foreach ($allRows as $row) {
          echo '<tr>';
          echo '<td>', $row['hive_id'], '</td>';
          echo '<td>', $row['collection_date'], '</td>';
          echo '<td>', $row['sample_period'], '</td>';
          echo '<td>', $row['number_mites'], '</td>';
          echo '</tr>';
      }
      ?>
</tbody>

  </body>
</html>

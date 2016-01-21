<?php

  class beedatabaseModel {

    var $db;

    public function __construct(PDO $db)
    {
        //PDO connection code will be in the constructor
        $this->db = $db;
    }

    public function getAllEntries()
    {
      $query = "SELECT hive_id, collection_date, sample_period, number_mites FROM bee_sample_data";
      return $this->db->query($query);
    }
  }


 ?>

<?php

  class beedatabaseModel {

    var $db;

    public function __construct(PDO $db)
    {
        //PDO connection code will be in the constructor
        $this->db = $db;
    }

    public function getAllEntires()
    {
      //SELECT stuff 
      $query = "SELECT * FROM bee_sample_data";
      return $this->db->query($query);
    }
  }


 ?>

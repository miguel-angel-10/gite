<?php
   require_once( "Connexion.php" );

  class User extends Connexion {
    private $connec;
    public function __construct(){
      parent::__construct();
    }

    public function listGites(){
      $this->connec = $this->dbConnect();
      $sql = " SELECT * FROM gite";
      $statement = $this->connec->query( $sql );
      $statement->execute();
      $results = $statement->fetchAll( PDO::FETCH_OBJ );
      return $results;
    }

   }
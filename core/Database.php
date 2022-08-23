<?php
    class Database{
        public $conn;
        public  function __construct(){
            $server ="localhost";
            $db="project2";
            $username="root";
            $password="";
            
            try {
              
              $this->conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
             
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            } 
        } 

        public function dataWrite($sql){
          $statement = $this->conn->prepare($sql);
          $statement->execute();
        }

        public function dataRead($sql){
          $statement = $this->conn->prepare($sql);
          $statement->execute();
          return $statement->fetchAll();
        }
        public function dataReadSingle($sql){
          $statement = $this->conn->prepare($sql);
          $statement->execute();
          return $statement->fetch(PDO::FETCH_ASSOC);
        }

    }
    

?>
<?php
class Connection{
    // specify your own database credentials
    private $host;
    private $db_name;
    //private $db_name = "student";
    private $username;
    private $password;
    public $conn;
 
    // get the database connection
    public function getConnection(){
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "students";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      //from js it sends the search result
      //echo $this->conn;
      
      return $conn;

    }
  }
?>
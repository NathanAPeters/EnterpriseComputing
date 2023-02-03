<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
include_once '../config/connection.php';
 
class Student{
  private $result;
  private $id = 1;
  private $name = "jackedHuman";
  private $num = 99999;
  private $age = 22;
    //this function will return all rows in the student table
  function getAll(){
    $connection = new Connection();
    $db = $connection->getConnection();
    $Sql = "SELECT * FROM student";
    $result = $db->query($Sql);
    $datas = array();
    if (!$result) {
        trigger_error('Invalid query: ' . $db->error);
    }
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $datas[] = $row;
        echo 
        "Student id: " . $row["id"]."<br>".
        "Name: " . $row["student_name"]."<br>".
        "Age: " . $row["student_age"]."<br>".
        "Student Number: " . $row["student_number"]."<br><br>";
      }
    } 
    else {
      echo "0 results";
    }
    $db->close();
  }

  //this function will delete by a given id of a student
  function deleteById(int $id){
    $connection = new Connection();
    $db = $connection->getConnection();
    $sql = "DELETE FROM student WHERE id = '" . $id . "';";
    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
    }
    $db->close();
  }


  //this function updates the info with new values and given id
  function updateById(int $oldID){
    $connection = new Connection();
    $db = $connection->getConnection();
    $sql = "UPDATE student SET id = " . $this->id . ", student_name = '" . $this->name . "', student_number = " . $this->num .", student_age = " . $this->age . " WHERE id = " . $oldID .";";
    if ($db->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $db->error;
    }
    $db->close();
  }
}

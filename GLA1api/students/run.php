

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/connection.php';
include_once '../students/student.php';
$student = new student();
//$student->deleteById(59);
$student->getAll();
//$student->updateById(21);
?>
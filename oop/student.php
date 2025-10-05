<?php
include './config.php';
class student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn = $conn;
    }
    function getData(){

        $getStudents = $this->DBconn->prepare("SELECT * FROM students");
        $getStudents->execute();
        $students = $getStudents->fetchAll();
        return $students;
    }
}
$student = new student($conn);
$allStudents = $student->getData();
foreach($allStudents as $s){
    echo "Name: ".$s['name']."<br />";
  
    echo "-------------------------<br />";
}



?>
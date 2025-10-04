<?php
include './config.php';


$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students = $getStudents->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($students);
// echo "</pre>";


echo "<table border='1' cellpadding='10'>";
foreach($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['id'] . "</td>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['course'] . "</td>"; 
    echo "<td>" . $student['batch'] . "</td>";
    echo "<td>" . $student['year'] . "</td>";
    
    echo "</tr>";
}


echo "</table border='1' cellpadding='10'>";



?>
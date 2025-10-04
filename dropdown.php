<?php
include './config.php';

$getStudents = $conn->prepare("select id, name from students");
$getStudents->execute();
$studentData = $getStudents->fetchAll(PDO::FETCH_ASSOC);
//  echo "<pre>";
// print_r($studentData);   
//  echo "</pre>";

echo "<select>";
foreach($studentData as $student) {
    echo "<option value='" . $student['id'] . "'>" . $student['name'] . "</option>";
}
echo "</select>";

?>
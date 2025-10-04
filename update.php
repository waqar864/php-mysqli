<?php

// echo "Update Page";
include './config.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudent = $conn->prepare("select * from students where id = '$id'");
    $getStudent->execute();
    $student = $getStudent->fetch(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($student);
    // echo "</pre>";
    echo "<form action='' method='post'>
    <input type='text' name='name' placeholder='Enter Name' value='" . $student['name'] . "'>
    <br />
    <br />
    <input type='text' name='course' placeholder='Enter Course' value='" . $student['course'] . "'>
    <br />
    <br />
    <input type='text' name='batch' placeholder='Enter Batch' value='" . $student['batch'] . "'>
    <br />
    <br />
    <input type='text' name='year' placeholder='Enter Year' value='" . $student['year'] . "'>
    <br />
    <br />
    <button name='update' value='" . $student['id'] . "'>Update</button>
    </form>";
    if(!$student) {
        echo "Student not found";
        die();
    }
}
if(isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $year = $_POST['year'];
    $updateStudent = $conn->prepare("update students set name = '$name', course = '$course', batch = '$batch', year = '$year' where id = '$id'");
    // $updateStudent->execute();
    if($updateStudent->execute()) {
        echo "Record updated successfully";
        header("Location: ./delete_edit.php");
    } else {
        echo "Failed to update record";
    }
}



?>
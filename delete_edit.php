<?php
include './config.php';
// //delete statically
// $students = $conn->prepare("delete from students where id ='8'");
// $students->execute();  

$students = $conn->prepare("select * from students");
$students->execute();

$result = $students->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";


echo "<table border='1' cellpadding='10'>";
foreach($result as $student){
    echo "<tr>";
    echo "<td>" . $student['id'] . "</td>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['course'] . "</td>"; 
    echo "<td>" . $student['batch'] . "</td>";
    echo "<td>" . $student['year'] . "</td>";
    echo "<td><form method='post'><button name='edit' value='" . $student['id'] . "'>Edit</button><button name='delete' value='" . $student['id'] . "'>Delete</button></form></td>";
    echo "</tr>";
}
echo "</table border='1' cellpadding='10'>";

if(isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $deleteStudent = $conn->prepare("delete from students where id = '$id'");
    // $deleteStudent->execute();
    if($deleteStudent->execute()) {
        echo "Record deleted successfully";
      
    } else {
        echo "Failed to delete record";
    }
}
if(isset($_POST['edit'])) {
    $id = $_POST['edit'];
    header("Location: ./update.php?id=$id");
}

?>
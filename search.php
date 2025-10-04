<form action="" method="post">
    <input type="text" name="search" placeholder="Search by Name or Course">
    <br />
    <br />
    <button>Search</button>
</form>

<?php
include './config.php';
if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $getStudents = $conn->prepare("select * from students where name LIKE '%$search%' OR course LIKE '%$search%'");
    $getStudents->execute();
    $studentData = $getStudents->fetchAll(PDO::FETCH_ASSOC);
    //  echo "<pre>";
    // print_r($studentData);   
    //  echo "</pre>";
    if($studentData) {
        echo "<table border='1' cellpadding='10'>";
        foreach($studentData as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['course'] . "</td>"; 
            echo "<td>" . $student['batch'] . "</td>";
            echo "<td>" . $student['year'] . "</td>";
            echo "</tr>";
        }
        echo "</table border='1' cellpadding='10'>";
    } else {
        echo "No records found";
    }
}



?>
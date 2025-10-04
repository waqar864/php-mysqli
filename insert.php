<?php
// include './config.php';
// $query = $conn->prepare("
// INSERT INTO `students` (`id`, `name`, `course`, `batch`, `year`) VALUES (NULL, 'John Doe', 'Computer Science', 'evening', '2nd');");

// $result = $query->execute();
// if($result) {
//     echo "Data inserted successfully";
// } else {
//     echo "Failed to insert data";
// }



?>


<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <br />
    <br />
    <input type="text" name="course" placeholder="Enter Course">
    <br />
    <br />
    <input type="text" name="batch" placeholder="Enter Batch">
    <br />
    <br />
    <input type="text" name="year" placeholder="Enter Year">
    <br />
    <br />
    <button>Submit</button>
</form>

<?php
if(isset($_POST['name'])){
    include './config.php';
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $year = $_POST['year'];
    $query = $conn->prepare("
    INSERT INTO `students` (`id`, `name`, `course`, `batch`, `year`) VALUES (NULL, '$name','$course', '$batch', '$year');");
    $result = $query->execute();
    if($result) {
        echo "Data inserted successfully";
    } else {
        echo "Failed to insert data";
    }
  
}



?>
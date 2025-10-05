<?php
class Teacher {
    function nextExam(){
        echo "Next exam is on 15th July<br />";
    }
    function age(){
        echo "Age is 45<br />";
    }
}

class Student extends Teacher {
    function age(){
        echo "Student Age is 20<br />";
    }
}

$st1 = new Student();
$st1->age();


?>
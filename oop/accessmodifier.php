<?php
class Teachers{

    //following is private function it is not accessible outside the class
    private function questionPapers() {
        echo "Question Papers for students<br />";
    }
    //following is public function it is accessible outside the class
    function exam(){
        $this->questionPapers();
        echo "Exams for students<br />";
    }
    protected function results() {
        echo "Results for students<br />";
    }
}

class Managment extends Teachers {
    function showResults() {
        $this->results();
    }
}

$t1 = new Teachers();
// $t1->questionPapers();
// $t1->exam();
// $t1->results();
$m1 = new Managment();
echo $m1->showResults();




?>
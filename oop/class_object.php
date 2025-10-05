<?php
class MathOprations{
    public $a;
    public $b;

    function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    function add() {
        return $this->a + $this->b;
    }

    function sub() {
        return $this->a - $this->b;
    }

    function mul() {
        return $this->a * $this->b;
    }

    function div() {
        return $this->a / $this->b;
    }
}
$obj = new MathOprations(100, 5);
echo "Addition: " . $obj->add() . "<br />";
echo "Subtraction: " . $obj->sub() . "<br />";
echo "Multiplication: " . $obj->mul() . "<br />";
echo "Division: " . $obj->div() . "<br />";



?>
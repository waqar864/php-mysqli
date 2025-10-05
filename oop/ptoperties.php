<?php
 
   class Properties {
    public $name;
    public $age;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function getAge() {
        return $this->age;
    }

   }
    $obj = new Properties();
    $obj->setName("John Doe");
    $obj->setAge(32);
    echo "Name: " . $obj->getName() . "<br />";
    echo "Age: " . $obj->getAge() . "<br />";


?>
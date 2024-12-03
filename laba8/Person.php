<?php
class Person {
    protected $name;
    protected $age;
    protected $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}
?>
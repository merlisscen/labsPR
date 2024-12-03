<?php
require_once 'Person.php';

class Student extends Person {
    private $group;
    private $yearOfEntry;
    private $position;

    public function __construct($name, $age, $gender, $group, $yearOfEntry, $position) {
        parent::__construct($name, $age, $gender);
        $this->group = $group;
        $this->yearOfEntry = $yearOfEntry;
        $this->position = $position;
    }

    public function showinfo() {
        echo "Студент: $this->name<br>";
        echo "Возраст: $this->age<br>";
        echo "Пол: $this->gender<br>";
        echo "Группа: $this->group<br>";
        echo "Год поступления: $this->yearOfEntry<br>";
        echo "Должность: $this->position<br><br>";
    }

    public function changegroup($newGroup) {
        $this->group = $newGroup;
    }

    public function changeposition($newPosition) {
        $this->position = $newPosition;
    }
}
?>
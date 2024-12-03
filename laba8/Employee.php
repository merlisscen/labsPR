<?php
require_once 'Person.php';

class Employee extends Person {
    private $position;
    private $startYear;
    private $experience;
    private $salary;

    public function __construct($name, $age, $gender, $position, $startYear, $experience, $salary) {
        parent::__construct($name, $age, $gender);
        $this->position = $position;
        $this->startYear = $startYear;
        $this->experience = $experience;
        $this->salary = $salary;
    }

    public function showinfo() {
        echo "Сотрудник: $this->name<br>";
        echo "Возраст: $this->age<br>";
        echo "Пол: $this->gender<br>";
        echo "Должность: $this->position<br>";
        echo "Год начала работы: $this->startYear<br>";
        echo "Стаж: $this->experience лет<br>";
        echo "Зарплата: $this->salary руб.<br><br>";
    }

    public function changeposition($newPosition) {
        $this->position = $newPosition;
    }

    public function changesalary($newSalary) {
        $this->salary = $newSalary;
    }
}
?>
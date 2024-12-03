<?php
require_once 'Student.php';
require_once 'Employee.php';


$student = new Student("Иван Петров", 20, "мужской", "21ИТ25", 2021, "староста");


$employee = new Employee("Мария Иванова", 45, "женский", "преподаватель", 2010, 12, 50000);


$student->showinfo();


$student->changegroup("21ИТ26");
$student->changeposition("профорг");


echo "После изменений:<br>";
$student->showinfo();


$employee->showinfo();


$employee->changeposition("зав. кафедрой");
$employee->changesalary(60000);


echo "После изменений:<br>";
$employee->showinfo();
?>
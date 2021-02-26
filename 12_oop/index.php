<?php

require_once "Persons.php";
require_once "Student.php";

// What is class and instance
class Person {
    public $name;
    public $surname;
    private $age;
}

$person = new Person();
echo '<pre>';
var_dump($person);
echo '</pre>';

$person->name = 'Kevin';
$person->surname = 'Mutwiri';
echo '<pre>';
var_dump($person);
echo '</pre>';

echo $person->name.' '.$person->surname.'<br>';

$person1 = new Person();
$person1->name = 'Diana';
$person1->surname = 'Wambui';
echo '<pre>';
var_dump($person1);
echo '</pre>';




// Create Persons class in Persons.php
// Create instance of Persons
$person2 = new Persons('The', 'Wambui');
$person2->setAge(30);
echo '<pre>';
var_dump($person2);
echo '</pre>';
echo $person2->getAge().'<br>';

$person3 = new Persons("Diana", "Njeri");
$person3->setAge(22);
echo '<pre>';
var_dump($person3);
echo '</pre>';
echo $person3->getAge().'<br>';

$person4 = new Persons("John", "Gathirwa");
echo '<pre>';
var_dump($person4);
echo '</pre>';
echo $person4->getAge().'<br>';

// access static properties and methods with double colon
echo Persons::$counter.'<br>';
echo Persons::getCounter();

$student = new Student("Willy", "Nganga", '002015');
echo '<pre>';
var_dump($student);
echo '</pre>';
<?php

require_once "Persons.php";

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

// access static properties with double colon
echo Persons::$counter.'<br>';
echo Persons::getCounter();

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
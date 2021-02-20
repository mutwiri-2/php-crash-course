<?php

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

class Persons {
    public $name;
    public $surname;
    private $age;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

$person2 = new Persons('The', 'Wambui');
$person2->setAge(30);
echo '<pre>';
var_dump($person2);
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter
<?php

class Persons {
    public $name;
    public $surname;
    private $age;
    // static properties / methods belong to class not objects
    public static $counter = 0; 

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++; // increase counter whenever we create an instance
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}
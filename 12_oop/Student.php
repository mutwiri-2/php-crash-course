<?php
require_once "Persons.php";

class Student extends Persons
{
    public string $studentId;
    
    public function __construct($name, $surname, $studentId)
    {
        $this->studentId = $studentId;
        parent::__construct($name, $surname);
    }
}
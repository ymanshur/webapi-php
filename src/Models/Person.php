<?php
namespace Src\Models;

class Person
{
    public $firstname;
    public $lastname;

    function __construct($firstname, $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}
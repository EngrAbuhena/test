<?php

class Person{
    public $name;
    public $age;
    public function __construct($name, $age)  // object create howar sathe sathe run hoy
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function personDetails(){
        echo "Name is {$this->name}".'<br>'."Age is {$this->age}";
    }
}
$rony = new Person('Rony', 26);
$rony->personDetails();
unset($rony);   // delete the object
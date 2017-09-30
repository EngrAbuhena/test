<?php

class Person{
    public $name;
    public $age;
    public $id;
    public function set($n, $a, $i){
      $this->name = $n;
      $this->age = $a;
      $this->id = $i;
}
    public function details(){
        echo "Name : {$this->name}".'<br>'."Age : {$this->age}".'<br>'."ID : {$this->id}".'<br>';

}
    public function __destruct()    // run at the end of the object
    {
        // TODO: Implement __destruct() method.
        echo "Person details saved!";
    }
}

$b = new Person();
$b->set('Rony', 26, '133-15-3000');
$b->details();

<?php

class Person
{
	public $name;
	public function set_name($name)
	{
    	$this->name = $name;
	}

	public function get_name()
	{
		echo $this->name."<br>";
	}
}

class Employee extends Person{}

$sayed = new Person();
$sayed->set_name('Sayed');
$sayed->get_name();

$rony = new Employee();
$rony->set_name('Rony');
$rony->get_name();

// TODO: Checking object's instance classes

if ($sayed instanceof Person){
    echo $sayed->name.' is Inherited.';
}
echo '<br>';
if ($rony instanceof Person){
    echo $rony->name.' is Inherited.';
}
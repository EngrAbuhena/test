<?php

abstract class abs
{
	abstract public function display($name);

	public function age()
	{
		echo 'Your Age is 23';
	}
}

class def extends abs
{
	public function display($name)
	{
		echo $name."<br>";
	}
}

$obj1 = new def();
$obj1->display("Md.Sayed Ahammed");
$obj1->age();

?>
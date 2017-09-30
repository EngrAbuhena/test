<?php

interface a
{
	public function foo($name);
}

class C implements a
{
	public function foo($name)
	{
		echo $name;
	}
}

$obj1 = new C();
$obj1->foo('sayed');


?>
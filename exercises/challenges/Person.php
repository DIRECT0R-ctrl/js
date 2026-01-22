<?php 

class Person 
{
	public string $name;

	 public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function sayHello()
	{
		return "Bonjour, je m'appele {$this->name}";
	}
}

$person = new Person("aymane");
echo $person->sayHello() . "\n";

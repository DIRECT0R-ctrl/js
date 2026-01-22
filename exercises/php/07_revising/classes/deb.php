<?php

class User {
	protected string $name;

	public function __construct($name) {
		$this->name = $name;
	}
	public function getRole()
	{
		return "User";
	}
	public function intro()
	{
		
		return "Hi im {$this->name} and i am {$this->getRole()}";
	}

}

class Student extends User 
{

	public function getRole()	
	{
		return "student";
	}

}

$student = new Student("aymane");
echo $student->Intro();

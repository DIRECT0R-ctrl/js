<?php 

class Learner {
	public $name;
	public $grade;

	public function __construct($name, $grade)
	{
		$this->name = $name;
		$this->grade = $grade;
	}

	public function getStatus()
	{
		if ($this->grade >= 10)
		{
			return "admis \n";
		} else {
			return "non admis \n";
		}
	}
}

$Learner = new Learner("aymane", 20);
echo $Learner->getStatus();

$Learner = new Learner("housam", 10);
echo $Learner->getStatus();

$Learner = new Learner("whatever", 5);
echo $Learner->getStatus();

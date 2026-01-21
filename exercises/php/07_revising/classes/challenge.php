<?php 

class Student {
	private $id;
	private $fullname;
	private $email;

	public function __construct($id, $fullname, $email)
	{
		$this->id = $id;
		$this->fullname = $fullname;
		$this->setEmail($email);
	}
	
	public function setEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			throw new InvalidArgumentException("Invalid email: $email");
		}
		return $this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function toArray()
	{
		return get_object_vars($this);
	}
	
}

$student = new Student(1, "aymane laksimi", "dominantvortex@proton.me");
print_r($student->toArray());

$student->setEmail("aymmane@gmail.com");
print_r($student->toArray());
?>

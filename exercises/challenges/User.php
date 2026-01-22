<?php 
class User {
	private string $email;

	public function __construct($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{	
		$this->email = $email;
	}

}

$user = new User("dominantvortex@proton.me");
// echo $user->$email;

echo $user->getEmail() . "\n";
$user->setEmail("pshtazbe@gmail.com");
echo $user->getEmail() . "\n";


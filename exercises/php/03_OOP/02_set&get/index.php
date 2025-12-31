<?php

class User {
	public $username;
	private $email;

	public function __construct($username, $email)
	{
		$this->username = $username;
		$this->email = $email;
	}

	public function addFriend()
	{
		return "$this->email added a new friend";
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		if(strpos($email, '@') > -1)
		{
			$this->email = $email;
		}
	}
}


$userOne = new User('aymane', 'laksimi@proton.me');
$userTow = new User('luigi', 'lui@thenetninja@gmail.com');


echo $userOne->addFriend() . '<br>';
echo $userOne->getEmail() . '<br>';

$userOne->setEmail('dominantVortex@proton.me');
echo $userOne->getEmail();
?>

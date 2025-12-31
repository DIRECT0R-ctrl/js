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
}


$userOne = new User('aymane', 'laksimi@proton.me');
$userONe = new User('luigi', 'lui@thenetninja@gmail.com');


echo $userone->addFriend;
?>

<?php

session_start();

interface Authenticatable
{
    public function login(string $email, string $password): bool;
    public function logout(): void;
}

class User implements Authenticatable
{
	protected $email;
	protected $loggedIn;

	protected array $user = [
		"dominantvortex@proton.me" => "1234"
	];
	public function login($email, $password)
	{
		if (isset($this->user['email']))
		{
			return false;
		}

		if($this->$user[$email] !== $password)
		{
			return false;
		}
	}
}


/*class Admin implements Authenticatable
{

}

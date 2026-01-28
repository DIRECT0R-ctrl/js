<?php

class User
{
	public function __construct()
	{
	}

	public function getRole()
	{
		return "User \n";
	}


}

class Admin extends User
{
	public function getRole()
	{
		return "Admin \n";
	}

}

$user = new User();
echo $user->getRole();

$user = new Admin();
echo $user->getRole();

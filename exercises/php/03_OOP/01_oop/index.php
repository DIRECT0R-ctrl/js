<?php

class User {
	
private $username = 'ryu';
public $email = 'ryu@thenetninja.co.uk';


public function __construct($username, $email)
{
	$this->username = $username;
	$this->email = $email; 
}

function afichage()
{
	return $this->username;
}

function modification($username, $email)
{
	$this->username = $username;
	$this->email = $username;
}
public function addFriend() 
{
	if ($this->username != NULL && $this->email != NULL)
	{
		return "$this->username addded a new friend";
	}
}

}	

$userOne = new User('aymane', 'maria#hhh.com');
$userTow = new User('MOHAMED AMINE', 'amine@proton.me');

/* echo $userOne->username . '<br>';
// echo 'the class is ' . get_class($userTow);
echo $userOne->email . '</br>';
echo $userOne->addFriend() . '</br>';


$userTow->username;
$userTow->email = 'aymane@proton.me';

echo $userTow->username . '<br>';
echo $userTow->email . '<br>';
 */

$showCase = $userOne;
echo $showCase->afichage();

// print_r(get_class_vars('User'));
// echo "\n";
//print_r(get_class_methods('User'));
?>

<html lang=en>

<head>
	<title>PHP OOP Tutorial</title>
</head>

<body>
	
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>this is arryas</h2>" . "<br>";


$person = [
	'name' => 'aymane',
	'age' => 20,
	'city' => 'rabat'
];


echo "name : " . $person['name'] . "<br>";
echo "age : " . $person['age'] . "<br>";


// lesson 2 : changing value

echo "<h2>changin array value or add a new key</h2>" . "<br>";

// change
$newone = $person['name'] = 'unknown';
echo "new name : " . $newone . "<br>" ;

$newage = $person['age'] = '27';
echo "new age : " . $newage . "<br>";


// add 

$addone = $person['job'] = 'social engineering';

echo "the job is " . $addone . "<br>";


// database config example 

$db_config = [
	'host' => 'localhost',
	'user' => 'admin',
	'password'=> '1234'
];

$database_host = $db_config['host'];
$databse_ser = $db_config['user'];

echo "we will connect too : " . $database_host . "<br>";
echo "using username : ". $databse_ser . "<br>";
?>

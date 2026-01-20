<?php

$innerArray = [
	'/' => 'home',
	'/about' => 'about',
];

$outerArray = [
	'GET' => $innerArray
];

var_dump($outerArray);
?>

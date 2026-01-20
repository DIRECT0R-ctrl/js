<?php
function getRoute(){
       	return [
		'GET' => [
			'/' => 'home',
			'/about' => 'about'
		]
	];
}

$route = getRoute();
var_dump($route);
?>

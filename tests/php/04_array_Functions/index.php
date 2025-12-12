<?php

$za = array();

$za["name"] = "aymane";
$za["course"] = "wa4e";

if (array_key_exists('course', $za)) {
	echo "<pre>";
	echo("course exists\n");
	echo "</pre>";
} else {
	echo "pre";
	echo("course does not exist\n");
	echo "<\pre>";
}

echo isset($za['name']) ? "name is set\n" : "name is not set\n";
echo isset($za['addr']) ? "addr is set\n" :  "addr is not set\n";
?>

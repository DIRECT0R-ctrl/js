<?php

class Session{
	public function get($key, $default = null)
	{
		return $_SESSION[$key] ?? $default;
	}
}


$_SESSION['user_id'] = /*null*/ 42;

$session = new Session();
$session->get('user_id', 0);

echo $_SESSION['user_id'] ?? 0;
echo "\n"



?>

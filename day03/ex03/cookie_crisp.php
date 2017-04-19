<?php
	
	$name = $_GET['name'];
	$value = $_GET['value'];
	
	if ($_GET['action'] === 'set')
		setcookie($name, $value);
	else if ($_GET['action'] === 'get')
		echo $_COOKIE[$name];
	else if ($_GET['action'] === 'del')
		setcookie($name, NULL, -1, '/');
?>

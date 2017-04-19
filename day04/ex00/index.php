<?php
	session_start();
	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] === "OK")
	{
		$login = $_GET['login'];
		$passwd = $_GET['passwd'];
		$_SESSION = array(
			'login' => $login,
			'passwd' => $passwd);
	}
?>
<!DOCTYPE html>
<html><body>
<form action="index.php" method="get" name="index.php">
	Username: <input type="text" name="login" value="<?=$_SESSION['login']?>" />
	<br />
	Password: <input type="password" name="passwd" value="<?=$_SESSION['passwd']?>" />
	<br />
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>

<?php

	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK" && file_exists('../private/passwd'))
	{
		
		$login = $_POST['login'];
		$oldpw = hash("whirlpool", $_POST['oldpw']);
		$newpw = hash("whirlpool", $_POST['newpw']);

		$arr = unserialize(file_get_contents("../private/passwd"));

		if ($arr)
		{
			foreach ($arr as &$elem)
			{
				if ($elem['login'] === $login && $elem['passwd'] === $oldpw)
				{
					$elem['passwd'] = $newpw;
					file_put_contents("../private/passwd", serialize($arr));
					echo "OK\n";
					return ;
				}
			}
		}
	}
	echo "ERROR\n";
?>

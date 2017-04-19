<?php

	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
	{
		$login = $_POST['login'];
		$passwd = $_POST['passwd'];
		if (!file_exists("../private"))
    	{
        	mkdir("../private");   
    	}
    	if (file_exists("../private/passwd"))
    	{
    		$ar = file_get_contents("../private/passwd");
    		$ar = unserialize($ar);

    		if ($ar)
    		{
    			foreach ($ar as $node)
    			{
    				if ($node['login'] === $login)
    				{
    					echo "ERROR\n";
    					return ;
    				}
    			}
    		}
    	}
    	$ar[] = ["login" => $login, "passwd" => hash("whirlpool", $passwd)];
    	file_put_contents("../private/passwd", serialize($ar));
    	echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>

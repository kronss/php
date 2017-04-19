#!/usr/bin/php
<?php

	function str_cmp($str1, $str2)
	{
		$max = max(strlen($str1), strlen($str2));
		for ($i=0; $i < $max; $i++)
		{
			if ($i == strlen($str1))
				return (-1);
			else if ($i == strlen($str2))
				return (1);
			$c1 = substr($str1, $i, 1);
			$c2 = substr($str2, $i, 1);
			if (strtolower($c1) == strtolower($c2))
				continue ;
			if (ctype_alpha($c1))
			{
				if (ctype_alpha($c2))
					return (strtolower($c1) < strtolower($c2)) ? (-1) : (1);
				else
					return (-1);
			}
			else if (is_numeric($c1))
			{
				if (ctype_alpha($c2))
					return (1);
				else if (is_numeric($c2))
					return ($c1 < $c2) ? (-1) : (1);
				else
					return (-1);
			}
			else
			{
				if (ctype_alpha($c2) || is_numeric($c2))
					return (1);
				else
					return ($c1 < $c2) ? (-1) : (1);
			}
		}
	}

	$res = array();
	for ($i = 1; $i < count($argv); $i++)
	{
		$temp = preg_split("/\s+/", $argv[$i]);
		foreach ($temp as $elem)
			$res[] = $elem;
	}
	usort($res, 'str_cmp');

	foreach ($res as $elem)
		echo $elem . "\n";
?>

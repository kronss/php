#!/usr/bin/php
<?php

	$res = array();
	date_default_timezone_set('Europe/Kiev');
	$curr = get_current_user();
	$utmpx = file_get_contents("/var/run/utmpx");
	$tail = substr($utmpx, 1256);
	$format   = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
	while ($tail)
	{
		$array = unpack($format, $tail);
		if (strcmp(trim($array['user']), $curr) == 0 && $array['type'] == 7)
		{
			$user = trim($array['user']) . "  ";
			$line = trim($array['line']) . "  ";
			$date = date("M  j H:i", $array["time1"]);
			$res = array_merge($res, array($user.$line.$date));
		}
		$tail = substr($tail, 628);		
	}
	sort($res);
	foreach ($res as $elem)
	{
		echo $elem;
		echo "\n";
	}
?>

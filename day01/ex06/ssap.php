#!/usr/bin/php
<?php
	function		ft_split($argv)
	{
		$array = array_filter(explode(" ", trim($argv)));
		sort($array);
		return ($array);
	}

	$array = array();

	unset($argv[0]);

	foreach ($argv as $ar)
	{	
		$tmp_array = ft_split($ar);
		$array = array_merge($array, $tmp_array);
	}

	sort($array);

	foreach ($array as $arr)
		echo($arr . "\n");
?>

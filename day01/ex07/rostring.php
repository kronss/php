#!/usr/bin/php
<?php
	function	ft_split($str)
	{
		$array = array_filter(explode(" ", trim($str)));
		return ($array);
	}

	if ($argc > 1)
	{
		$array = ft_split($argv[1]);
		
		if (count($array) > 1)
		{	
			foreach ($array as $ar)
			{
				if ($array[0] == $ar)
					continue ;
				echo $ar . " ";
			}	
		}
		echo $array[0] . "\n";
	}
?>

<?php
	function ft_is_sort($array)
	{
		$tmp_arr = $array;
		sort($array);
		$i = 0;
		while ($i < count($array))
		{
			if ($tmp_arr[$i] != $array[$i])
				return (FALSE);
			$i++;
		}
		return (TRUE);
	}
?>

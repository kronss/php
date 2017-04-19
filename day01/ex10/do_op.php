#!/usr/bin/php
<?php

if ($argc == 4)
{
	$a = trim($argv[1]);
	$operand = trim($argv[2]);
	$b = trim($argv[3]);
	
	if ($operand == '+')
		$res = $a + $b;
	else if ($operand == '-')
		$res = $a - $b;
	else if ($operand == '*')
		$res = $a * $b;
	else if ($operand == '/')
		$res = $a / $b;
	else if ($operand == '%')
		$res = $a % $b;
	echo $res;
}
else
	echo "Incorrect Parameters";
echo "\n";
?>

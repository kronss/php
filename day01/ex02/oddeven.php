#!/usr/bin/php
<?php
	while (1)
	{	
		echo "Enter a number: ";
		$nbr = trim(fgets(STDIN));
		if (feof(STDIN))
			exit();
		if (is_numeric($nbr))
		{
			if ($nbr % 2 == 0)
				echo "The number " . $nbr . " is even\n";
			else if ($nbr % 2 != 0)
				echo "The number " . $nbr . " is odd\n";
		}
		else
			echo "'" . $nbr . "'" . " is not a number\n";
	}
?>

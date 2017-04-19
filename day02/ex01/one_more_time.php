#!/usr/bin/php
<?php
	
	$pattern = '/^[a-zA-Z]+ [0-9]{1,2} [a-zA-Zéû]+ [0-9]{4} [0-2]{1}[0-9]{1}:[0-5][0-9]:[0-5][0-9]$/';
	$subject = $argv[1];

	if ($argc == 2)
	{
		if (preg_match($pattern, $subject))
		{
			$subject = preg_replace('/[Ll]undi/', "Monday", $subject);
			$subject = preg_replace('/[Mm]ardi/', "Tuesday", $subject);
			$subject = preg_replace('/[Mm]ercredi/', "Wednesday", $subject);
			$subject = preg_replace('/[Jj]eudi/', "Thursday", $subject);
			$subject = preg_replace('/[Vv]endredi/', "Friday", $subject);
			$subject = preg_replace('/[Ss]amedi/', "Saturday", $subject);
			$subject = preg_replace('/[Dd]imanche/', "Sunday", $subject);
			if ($subject == $argv[1])
			{
				echo("Wrong Format\n");
				exit();
			}
			$tmp = $subject;

			$subject = preg_replace('/[Jj]anvier/', "January", $subject);
			$subject = preg_replace('/[Ff](é|e)vrier/', "February", $subject);
			$subject = preg_replace('/[Mm]ars/', "March", $subject);
			$subject = preg_replace('/[Aa]vril/', "April", $subject);
			$subject = preg_replace('/[Mm]ai/', "May", $subject);
			$subject = preg_replace('/[Jj]uin/', "June", $subject);
			$subject = preg_replace('/[Jj]uillet/', "July", $subject);
			$subject = preg_replace('/[Aa]o(û|u)t/', "August", $subject);
			$subject = preg_replace('/[Ss]eptembre/', "September", $subject);
			$subject = preg_replace('/[Oo]ctobre/', "October", $subject);
			$subject = preg_replace('/[Nn]ovembre/', "November", $subject);
			$subject = preg_replace('/[Dd](é|e)cembre/', "December", $subject);
			if ($tmp == $subject)
			{
				echo("Wrong Format\n");
				exit();
			}
			date_default_timezone_set("Europe/Paris");
			echo (strtotime($subject));

		}
		else
			echo("Wrong Format\n");
	}
?>

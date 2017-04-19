<?php

	class Tyrion extends Lannister
	{
		public function sleepWith($who)
		{
			if ($who instanceof Jaime)
			{
				echo "Not even if I'm drunk !" . PHP_EOL;
			}
			else if ($who instanceof Sansa)
			{
				echo "Let's do this." . PHP_EOL;
			}
			else if ($who instanceof Cersei)
			{
				echo "Not even if I'm drunk !" . PHP_EOL;
			}
		}
	}

?>

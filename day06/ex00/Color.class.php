<?php


	Class Color
	{
		public $red;
		public $green;
		public $blue;
		static $verbose = False;

		public function __construct($array)
		{
			if (array_key_exists('rgb', $array))
			{
				$rgb = intval($array['rgb']);
				$this->red = 0xFF & ($rgb >> 16);
				$this->green = 0xFF & ($rgb >> 8);
				$this->blue = 0xFF & $rgb;
			}
			else if (array_key_exists('red', $array) && array_key_exists('green', $array) && array_key_exists('blue', $array))
			{
				$this->red = intval($array['red']);
				$this->green = intval($array['green']);
				$this->blue = intval($array['blue']);
			}
			else
			{
				$this->red = 0;
				$this->green = 0;
				$this->blue = 0;
			}
			if (self::$verbose) {
				echo ($this . "constructed." . PHP_EOL);
			}
		}


		public function __destruct()
		{
			if (self::$verbose)
			{
				echo ($this . "destructed." . PHP_EOL);
			}
		}


		static function doc()
		{
			return (file_get_contents('Color.doc.txt'));
		}


		public function add($nCol)
		{
			return new Color(array(
			'red' => $this->red + $nCol->red,
			'green' => $this->green + $nCol->green,
			'blue' => $this->blue + $nCol->blue,
		));
		}


		public function sub($nCol)
		{
			return new Color(array(
			'red' => $this->red - $nCol->red,
			'green' => $this->green - $nCol->green,
			'blue' => $this->blue - $nCol->blue,
		));
		}


		public function mult($nCol)
		{
			return new Color(array(
			'red' => $this->red * $nCol->red,
			'green' => $this->green * $nCol->green,
			'blue' => $this->blue * $nCol->blue,
		));
		}


		public function __toString()
		{
			return('Color( red: ' . sprintf("%3s", $this->red) . 
				', green: ' . sprintf("%3s", $this->green) . 
				', blue: '. sprintf("%3s", $this->blue) .' )');
		}


	}


?>

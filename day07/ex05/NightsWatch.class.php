<?php
	class NightsWatch
	{
		private $array = array();

		public function recruit($fighter)
		{
			$this->array[] = $fighter;
		}

		public function fight()
		{
			foreach ($this->array as $key => $fighter)
			{
				if (method_exists(get_class($fighter), "fight"))
					$fighter->fight();
			}
		}
	}
?>

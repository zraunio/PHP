<?PHP
	class Fleet
	{
		private $_fleet = [];

		public function gather($ship)
		{
			if (get_parent_class($ship) === "Spaceship")
			{
				$this->_fleet[] = $ship;
			}
			else
				print("Fleet already has a ship named " . $fighter->getName() . PHP_EOL);	
		}

		public function send_out($fighter)
		{
			if (array_key_exists($fighter, $this->_fleet))
			{
				print("Player's fleet sneds out " . $fighter . PHP_EOL);
			return (clone ($this->_fleet[$fighter]));
			}
			else
				print("Fleet doesn't contain a ship of type " . $fighter . PHP_EOL);
		}
	}

?>

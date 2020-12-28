<?PHP
	class UnholyFactory
	{
		private $_pupet = [];

		public function absorb($fighter)
		{
			if (get_parent_class($fighter) == "Fighter")
			{
				if (!(array_key_exists($fighter->getName(), $this->_pupet)))
				{
					$this->_pupet[$fighter->getName()] = $fighter;
					print("(Factory absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);	
				}
				else
					print("(Factory already absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);	
			}
			else
				print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);	
		}

		public function fabricate($thing)
		{
			if (array_key_exists($thing, $this->_pupet))
			{
				print("(Factory fabricates a fighter of type " . $thing . ")". PHP_EOL);
			return (clone ($this->_pupet[$thing]));
			}
			else
				print("(Factory hasn't absorbed any fighter of type " . $thing . ")" . PHP_EOL);
		}
	}
?>

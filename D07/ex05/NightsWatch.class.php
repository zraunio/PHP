<?PHP
	class NightsWatch implements IFighter
	{
		private $_recruit = [];

		public function recruit($fighter)
		{
			$this->_recruit[] = $fighter;
		}

		public function fight()
		{
			foreach ($this->_recruit as $noob)
			{
				if (method_exists($noob, 'fight'))
					$noob->fight();
			}
		}
	}
?>

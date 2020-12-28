<?PHP
	abstract class House
	{
		abstract function getHouseName();
		abstract function getHouseSeat();
		abstract function getHouseMotto();

		public function introduce()
		{
			print("House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : \"" . $this->getHouseMotto() . "\"" . PHP_EOL);
		}
	}
?>
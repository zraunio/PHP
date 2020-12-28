<?PHP
	class Lannister
	{
		public function sleepWith($person)
		{
			if (get_parent_class($person) == 'Stark')
			{
				print("Let's do this." . PHP_EOL);
			}
		}
	}
?>
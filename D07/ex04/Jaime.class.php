<?PHP
	class Jaime extends Lannister
	{
		public function sleepWith($person)
		{
			Parent::sleepWith($person);
			if (get_class($person) == 'Cersei')
			{
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			}
			else if (get_parent_class($person) == 'Lannister')
			{
				print("Not even if I'm drunk !" . PHP_EOL);
			}
		}
	}
?>
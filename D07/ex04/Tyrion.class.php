<?PHP
	class Tyrion extends Lannister
	{
		public function sleepWith($person)
		{
			parent::sleepWith($person);
			if (get_parent_class($person) == 'Lannister')
			{
				print("Not even if I'm drunk !" . PHP_EOL);
			}
		}
	}
?>
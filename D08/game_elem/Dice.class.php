<?PHP
	class Dice
	{
		private static $_min = 1;
		private static $_max = 6;

		public static function roll()
		{
			return random_int(Self::$_min, Self::$_max);
		}
	}
?>

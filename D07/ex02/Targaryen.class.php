<?PHP
	class Targaryen
	{
		public function resistsFire()
		{
			return FALSE;
		}
		public function getBurned()
		{
			if (!$this->resistsFire())
				return "burns alive";
			else
				return "emerges naked but unharmed";
		}
	}
?>
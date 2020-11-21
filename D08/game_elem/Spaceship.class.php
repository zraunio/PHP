<?PHP
	class Spaceship
	{
		private $_title = "";
		private $_hull = 5;
		private $_size = "1x4";
		private $_engine = 10;
		private $_speed = 10;
		private $_handle = 2;
		private $_shield = 0;
		private $_shoot = 2;
		private	$weapon = "lazer";
		private	$_charge = 5;

		public function __construct($ship)
		{
			$this->_title = $ship;
			echo $_title;
		}

		public function setName()
		{
			if (trait_exists("Terror"))
				$this->_title = $_title . " of Doom";
			else if (trait_exists("Onslaught"))
				$this->_title = $_title . "Emerging";
			else if (trait_exists("Ironclad"))
				$this->_title = "The Unbendable" . $_title;
			else if (trait_exists("Frigate"))
				$this->_title = "Honourable" . $_title;
			else if (trait_exists("Destroyer"))
				$this->_title = $_title . " The Destroyer";
			else
				$this->_title = "Basic" . $_title;
		}

		public function setSize()
		{
			$this->_size = $this->size();
		}

		public function setHull()
		{
			$this->_hull = $this->skin_thic();
		}

		public function setEngine()
		{
			$this->_engine = $this->fly();
		}

		public function setSpeed()
		{
			$this->$_speed = $this->fast();
		}

		public function setHandle()
		{
			$this->$_handle = $this->manoeuver();
		}

		public function setShield()
		{
			$this->_shield = $this->protec();
		}

		public function setWeapon()
		{
			$this->_weapon = $this->arm();
		}
		public function getName()
		{
			return $this->_title;
		}

		public function setCharge()
		{
			$this->_charge = $this->bullets();
		}

		public function canShoot()
		{
			if ($_charge)
				$this->shoot;
			else
			{
			}
		}



	}

?>

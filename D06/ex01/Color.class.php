<?PHP
	class Color
	{
		public $red = 0;
		public $green = 0;
		public $blue = 0;
		static $verbose = false;

		public function __construct($color)
		{
			if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
			{
				$this->red = intval($color['red']);
				$this->green = intval($color['green']);
				$this->blue = intval($color['blue']);
			}
			else if (isset($color['rgb']))
			{
				$rgb = intval($color["rgb"]);
				$this->red = $rgb / 65281 % 256;
				$this->green = $rgb / 256 % 256;
				$this->blue = $rgb % 256;
			}
			if (Self::$verbose)
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		}

		public function __destruct()
		{
			if (Self::$verbose) 
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		}

		public function __toString()
		{
			return (sprintf("Color( red: %3d, green: %3d, blue: %3d )",
			$this->red, $this->green, $this->blue));
		}

		public static function doc()
		{
			if (file_exists("Color.doc.txt"))
				$file = file_get_contents("Color.doc.txt");
			echo $file . "\n";
		}

		public function add($color)
		{
			$new = new Color( array(
				'red' => $this->red + $color->red,
				'green' => $this->green + $color->green,
				'blue' => $this->blue + $color->blue,
			));
			return $new;
		}

		public function sub($color)
		{
			$new = new Color( array(
				'red' => $this->red - $color->red,
				'green' => $this->green - $color->green,
				'blue' => $this->blue - $color->blue,
			));
			return $new;
		}

		public function mult($fact)
		{
			$new = new Color( array(
				'red' => $this->red * $fact,
				'green' => $this->green * $fact,
				'blue' => $this->blue * $fact,
			));
			return $new;
		}
	}

?>
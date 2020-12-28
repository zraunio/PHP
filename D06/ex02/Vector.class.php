<?PHP
require_once "Color.class.php";
require_once "Vertex.class.php";

	class Vector
	{
		private $_x;
		private $_y;
		private $_z;
		private $_w = 0.0;
		private $_color;
		static $verbose = false;
	
		public function __construct($array)
		{
			if (isset($array['dest']) && $array['dest'] instanceof Vertex)
			{
				if (isset($array['orig']) && $array['orig'] instanceof Vertex) {
					$orig = new Vertex(array('x' => $array['orig']->getX(), 'y' => $array['orig']->getY(), 'z' => $array['orig']->getZ()));
				}
				else
					$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
				$this->_x = $array['dest']->getX() - $orig->getX();
				$this->_y = $array['dest']->getY() - $orig->getY();
				$this->_z = $array['dest']->getZ() - $orig->getZ();
				$this->_w = 0;
			}
			if (Self::$verbose)
				printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public function __destruct()
		{
			if (Self::$verbose)
			printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public function __tostring()
		{
			return ($ret = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w) );
		}

		public static function doc()
		{
			if (file_exists("Vector.doc.txt"))
				$file = file_get_contents("Vector.doc.txt");
			echo $file . "\n";
		}
	
		public function magnitude()
		{
			$mag = (float)sqrt(
				($this->_x - $orig->x) ** 2 +
				($this->_y - $orig->y) ** 2 +
				($this->_z - $orig->z) ** 2
			);
			if ($mag == 1)
				return ("norm");
			else
				return ($mag);
		}

		public function normalize()
		{
			$len = $this->magnitude();
			if ($len == 1)
				return clone $this;
			$norm = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x / $len,
				'y' => $this->_y / $len,
				'z' => $this->_z / $len
			))));
			return ($norm);
		}

		public function add(Vector $rhs)
		{
			$added = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x + $rhs->_x,
				'y' => $this->_y + $rhs->_y,
				'z' => $this->_z + $rhs->_z
			))));
			return ($added);
		}
		public function sub(Vector $rhs)
		{
			$subbed = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x - $rhs->_x,
				'y' => $this->_y - $rhs->_y,
				'z' => $this->_z - $rhs->_z
			))));
			return ($subbed);
		}

		public function scalarProduct($k)
		{
			$scol = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x * $k,
				'y' => $this->_y * $k,
				'z' => $this->_z * $k
			))));
			return ($scol);
		}

		public function dotProduct(Vector $rhs)
		{
			$dotted = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x * $rhs->_x,
				'y' => $this->_y * $rhs->_y,
				'z' => $this->_z * $rhs->_z
			))));
			return ($dotted);
		}

		public function cos(Vector $rhs)
		{
			if ($this->magnitude() == "norm" || $rhs->magnitude() == "norm")
				return (0);
			else
			{
				$multilen = $this->magnitude() * $rhs->magnitude();
				return ($this->dotProduct($rhs) / $multilen);
			}
		}

		public function crossProduct(Vector $rhs)
		{
			return new Vector(array('dest' => new Vertex(array(
				'x' => $this->_y * $rhs->getZ() - $this->_z * $rhs->getY(),
				'y' => $this->_z * $rhs->getX() - $this->_x * $rhs->getZ(),
				'z' => $this->_x * $rhs->getY() - $this->_y * $rhs->getX()
			))));
		}

		public function opposite()
		{
			$opp = new Vector(array('dest' => new Vertex(array(
				'x' => $this->_x * (-1),
				'y' => $this->_y * (-1),
				'z' => $this->_z * (-1)
			))));
			return ($opp);
		}

		private function getX()
		{
			return $this->_x;
		}

		private function getY()
		{
			return $this->_y;
		}

		private function getZ()
		{
			return $this->_z;
		}

		private function getW()
		{
			return $this->_w;
		}
	}
?>
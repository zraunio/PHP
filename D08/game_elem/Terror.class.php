<?PHP
trait Terror
{
	private $_hull = 6;
	private $_size = "1x5";
	private $_engine = 10;
	private $_speed = 12;
	private $_handle = 4;
	private $_shield = 0;
	public	$_PP = 10;

	public function skin_thic()
	{
		return ($_hull);
	}

	public function size()
	{
		return ($_size);
	}

	public function hull()
	{
		return ($_hull);
	}

	public function fly()
	{
		return ($_engine);
	}

	public function fast()
	{
		return ($_speed);
	}

	public function protec()
	{
		return ($_shield);
	}
}
?>

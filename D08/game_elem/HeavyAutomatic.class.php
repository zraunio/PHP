<?PHP
trait HeavyAutomatic
{
	private $_weapon = "autH";
	private $_charge = 5;
	private $_clrange = 1;
	private $_midrange = 4;
	private $_lgrange = 8;

	public function arm()
	{
		return ($_weapon);
	}

	public function bullets()
	{
		return ($_charge);
	}
}
?>

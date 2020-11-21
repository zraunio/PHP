<?PHP
trait HeavySpear
{
	private $_weapon = "spearH";
	private $_charge = 0;
	private $_clrange = 30;
	private $_midrange = 60;
	private $_lgrange = 90;

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

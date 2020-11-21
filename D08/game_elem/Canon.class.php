<?PHP
trait Canon
{
	private $_weapon = "canon";
	private $_charge = 0;
	private $_clrange = 10;
	private $_midrange = 20;
	private $_lgrange = 30;

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

<?PHP
require_once('auth.php');

session_start();
if ($_GET['login'] && $_GET['passwd'])
{
	if (auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['loggued_on_user'] = $_GET['login'];
		echo "OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		exit ("ERROR\n");
	}
}
?>
<?PHP
session_start();
$login = $_SESSION['loggued_on_user'];
if (!$login)
	exit ("ERROR\n");
else
	echo $login."\n";
?>

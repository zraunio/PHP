<?PHP
session_start();
date_default_timezone_set('Europe/Helsinki');
if (!($_SESSION['loggued_on_user']))
	exit ("ERROR\n");
else
{
	if (file_exists("../private") && file_exists("../private/chat"))
	{
		$file = unserialize(file_get_contents("../private/chat"));
		foreach ($file as $msg)
			echo "[" . date('H:i', $msg['time']) . "] <b" . $msg['login']. "</b>: " . $msg['msg'] . "<br />\n";
	}
}
?>

<?PHP
session_start();
date_default_timezone_set("Europe/Helsinki");

if (!($_SESSION['loggued_on_user']))
	exit ("ERROR\n");
else
{
	if ($_POST['msg'])
	{
		if (!file_exists("../private"))
			mkdir("../private");
		if (!file_exists("../private/chat"))
			file_put_contents("../private/chat", null);
		$o_file = unserialize(file_get_contents("../private/chat"));
		$fp = fopen("../private/chat", "r+");
		flock($file, LOCK_EX);
		$n_msg['login'] = $_SESSION['loggued_on_user'];
		$n_msg['time'] = time();
		$n_msg['msg'] = $_POST['msg'];
		$o_file[] = $n_msg;
		file_put_contents("../private/chat", serialize($o_file));
		fclose($fp);
	}
	?>
<HTML>
	<HEAD>
		<SCRIPT language="javascript">top.frames['chat'].location = 'chat.php';</SCRIPT>
	</HEAD>
	<BODY>
		<FORM action="speak.php" method="POST">
		<input type="text" name="msg" value=""/>
		<input type="submit" name="submit" value="SEND" />
		</FORM>
	</BODY>
	</HTML>
		<?PHP
}
?>

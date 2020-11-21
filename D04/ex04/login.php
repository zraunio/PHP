<?PHP
include 'auth.php';
session_start();

if (!($_POST['login']) && !($_POST['passwd']) && (!(auth($_POST['login'], $_POST['passwd']))))
{
	$_SESSION['loggued_on_user'] = "";
	header('Location: index.html');
	exit ("ERROR\n");
}
else
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
	?>
<!DOCTYPE HTML>
<HTML>
	<HEAD>
	<meta charset="UTF-8">
	<TITLE>42 CHAT</TITLE>
	</HEAD>
	<BODY>
	<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
	<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
	<button type="submit" name="logout" formaction="/logout.php">LOG OUT</button>
	</BODY>
</HTML>
	<?PHP
}
?>

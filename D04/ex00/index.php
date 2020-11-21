<?PHP
session_start();
if ($_GET['submit'] && $_GET['submit'] === 'OK')
{
	if ($_GET['login'] && $_GET['passwd'])
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
}
?>
<HTML>
<HEAD>
	<TITLE>index.php</TITLE>
</HEAD>
<BODY>

<FORM action="index.php" method="GET">
	Username: <INPUT type="text" name="login" value="<?= $_SESSION['login']; ?>" />
	<br />
	Password: <input type="text" name="passwd" value="<?= $_SESSION['passwd']; ?>" />
	<br />
	<input type="submit" name="submit" value="OK"/>
</FORM>
</BODY>
</HTML>

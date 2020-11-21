<?PHP
session_start();

if ($_POST['login1'] && $_POST['login2'])
{
	$_SESSION["logged_in_user"]["key1"] = $_POST["login1"];
	$_SESSION["logged_in_user"]["key2"] = $_POST["login2"];
	if ($_POST['submit'] === 'OK')
		header("Location: D08/play.html");
		?>
	<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta charset="utf-8">
<TITLE>Your Fleets Have Gathered</title>
<LINK href="index.css" rel="stylesheet">
</HEAD>
<BODY>
	<H1>FIGHT!</H1>
	<IMG id="picture" 
	SRC="https://cdn.dribbble.com/users/375867/screenshots/4053894/2.png"
	ALT="SHIP!" TITLE="SHIP!">
</BODY>
</HTML>
	<?PHP
}
else
	exit ("ERROR: Enter names for both players!");
?>

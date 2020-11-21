<?PHP

if ($_POST['submit'] === 'OK')
{
	$dir = "../private";
	$file = "../private/passwd";
	if (file_exists($dir) === FALSE)
		mkdir($dir);
	if ($_POST['login'] && $_POST['passwd'])
	{
		$login = $_POST['login'];
		$passwd = hash('SHA256', $_POST['passwd']);
		if (file_exists($file))
		{
			$o_file = file_get_contents($file);
			$arr = unserialize($o_file);
			foreach ($arr as $key => $val)
			{
				if ($val['login'] === $login)
					exit("ERROR\n");
			}
		}
		$usr['login'] = $login;
		$usr['passwd'] = $passwd;
		$n_usr[] = $usr;
		$serial = serialize($n_usr);
		file_put_contents($file, $serial);
		echo "OK\n";
	}
	else
		exit("ERROR\n");
}
else
	exit("ERROR\n");

?>

<?PHP
if ($_POST['submit'] === 'OK')
{
	$file = "../private/passwd";
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		$login = $_POST['login'];
		$oldpw = hash('SHA256', $_POST['oldpw']);
		$newpw = hash('SHA256', $_POST['newpw']);
		$o_file = file_get_contents($file);
		$data = unserialize($o_file);
		$flag = 0;
		$i = 0;
		foreach($data as $key => $val)
		{
			if ($val['login'] === $login)
			{
				if ($oldpw === $val['passwd'])
				{
					$data[$i]['passwd'] = $newpw;
					$serial = serialize($data);
					file_put_contents($file, $serial);
					$flag = 1;
					echo "OK\n";
					exit;
				}
			}
			$i++;
		}
		if (!$flag)
			exit ("ERROR\n");
	}
	else
		exit ("ERROR\n");
}
else
	exit ("ERROR\n");
?>

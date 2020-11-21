<?PHP
function auth($login, $passwd)
{
	$file = "../private/passwd";
	if ($login && $passwd)
	{
		$o_file = file_get_contents($file);
		$data = unserialize($o_file);
		foreach ($data as $key => $val)
		{
			if ($val['login'] === $login && $val['passwd'] === hash('SHA256', $passwd))
				return (TRUE);
		}
	}
	else
		return (FALSE);
}
?>

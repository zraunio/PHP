#!/usr/bin/php
<?PHP
unset($argv[0]);
foreach($argv as $var)
{
	$res = array_filter(explode(' ', $var));
	foreach ($res as $word)
		$arr[] = $word;
}
sort($arr);
foreach($arr as $var)
	echo $var."\n";
?>

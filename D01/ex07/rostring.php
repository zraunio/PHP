#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$arr = array_values(array_filter(explode(' ', $argv[1])));
	$arr[count($arr)] = $arr[0];
	unset($arr[0]);
	foreach ($arr as $var)
		$res .= $var." ";
	echo trim($res)."\n";
}
?>

#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$arr = array_filter(explode(' ', $argv[1]));
	foreach($arr as $var)
		$res .= $var." ";
	echo trim($res)."\n";
}
?>

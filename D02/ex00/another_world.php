#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	echo trim(preg_replace("/[\t\s]+/", " ", $argv[1]));
	echo "\n";
}
?>
#!/usr/bin/php
<?PHP
	if ($argc < 2 || !file_exists($argv[1]))
		exit ;
	$read = fopen($argv[1], 'r');
	while ($read && !feof($read)) 
	{
		$file .= fgets($read);
    }
	$file = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {
		$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($matches) {
			return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
		}, $matches[0]);
		$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
			return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
		}, $matches[0]);
		return ($matches[0]);
	}, $file);
	echo $file;
?>

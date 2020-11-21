#!/usr/bin/php
<?PHP
$file = fopen("/var/run/utmpx", "r");
$n_file = explode("\n", fread($file, 4000));
print_r($n_file);
echo "\n";
$users = preg_grep("/(([a-z])+\/([a-z])+)\W/", $n_file); 
print_r($users);
/*$file = fopen("/var/run/utmpx", "r");
$n_file = fread($file, 4000);
print_r($n_file);
$final = unpack("", $n_file);
print_r($final);
$users = preg_match("/([a-z])+\/([a-z])+/", $n_file);
print_r($users);*/
?>

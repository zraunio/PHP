#!/usr/bin/php
<?PHP
function ft_is_sort($arr)
{
	$temp_arr = $arr;
	sort($temp_arr);
	if (array_diff_assoc($temp_arr, $arr) == null)
		return (true);
	else
		return (false);
}
?>

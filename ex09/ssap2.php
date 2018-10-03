#!/usr/bin/php
<?php
$array1= array("ish3", "Ish3", "ish1", "123", "1948372)", "42453", "*l", "#j", "a", "A");
natcasesort($array1);
print_r($array1);
function compare_char($char1, $char2)
{
	if ($char1 === $char2)
	return (0);
	if (ctype_alpha($char1))
	{
		if (ctype_alpha($char2))
			return (strtolower($char1) - strtolower($char1));
		else
			return -1;
	}
	else if ( $char1 >= 30 && $char1 <= 39)
	{
		if ($char2 >= 30 && $char2 <= 39)
			return ($char1 - $char2);
		else if (ctype_alpha($char2))
			return 1;
		return -1;
	}
	if (ctype_alpha($char2) || ($char2 >= 30 && $char2 <= 39))
		return -1;
	return 1;
}
function compare_str($str1, $str2)
{
	$min_len = min(strlen(str1), strlen(str2));
	$wt = 0;
	while ($wt < $min_len)
	{
		if (compare_char($str1[wt], $str2[wt]))
			return (compare_char($str1[wt], $str2[wt]));
		$wt++;
	}
	return (strlen($str1) - strlen($str2));
}
function ft_split_nosort($strs)
	return (array_filter(explode(" ", $strs), 'strlen'));
$res = NULL;
$wt = 0;
foreach($argv as $value)
{
	if ($value !== "./ssap.php")
	{
	$strs_argv = ft_split_nosort($value);
	foreach($strs_argv as $word)
		$res[$wt++] = $word;
	}
}
u
/*
function my_sort($str_array, $lenth)
{
	$no = 0;
	$mini_str = $str_array[$no];
	while ($no < $lenth)
	{
		$wt = $no + 1;

	}

}
*/
?>

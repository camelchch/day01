#!/usr/bin/php
<?php
function compare_char($char1, $char2)
{
	$char1 = strtolower($char1);
	$char2 = strtolower($char2);
	if ($char1 === $char2)
	return (0);
	if (97 <= ord($char1) && ord($char1) <= 123)
	{
		if (97 <= ord($char2) && ord($char2) <= 123)
			return (ord($char1) - ord($char2));
		else
			return -1;
	}
	if (is_numeric($char1))
	{
		if (is_numeric($char2))
			return ($char1 - $char2);
		if (97 <= ord($char2) && ord($char2) <= 123)
			return 1;
		return -1;
	}
	if ((97 <= ord($char2) && ord($char2) <= 123) || is_numeric($char2))
		return 1;
	return (ord($char1) - ord($char2));
}

function compare_str($str1, $str2)
{
	$min_len = min(strlen($str1), strlen($str2));
	$wt = 0;
	while ($wt < $min_len)
	{
		if (compare_char($str1[$wt], $str2[$wt]))
			return (compare_char($str1[$wt], $str2[$wt]));
		$wt++;
	}
	return (strlen($str1) - strlen($str2));
}

function ft_split_nosort($strs)
{
	$res = explode(" ", $strs);
	return (array_filter(explode(" ", $strs), 'strlen'));
}

$res = NULL;
$wt = 0;
foreach($argv as $value)
{
	if ($value !== "./ssap2.php")
	{
	$strs_argv = ft_split_nosort($value);
	foreach($strs_argv as $word)
		$res[$wt++] = $word;
	}
}
usort($res, compare_str);
foreach($res as $mot)
	echo "$mot\n";
?>

#!/usr/bin/php
<?php
function ft_split_nosort($strs)
{
	return (array_filter(explode(" ", $strs), 'strlen'));
}
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
sort($res);
foreach($res as $mot)
	echo "$mot\n";
?>

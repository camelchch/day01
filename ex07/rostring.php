#!/usr/bin/php
<?php
$str_array=array_filter(explode(" ", $argv[1]), 'strlen');
$wt = -1;
foreach($str_array as $str)
{
	if (++$wt)
		echo "$str ";
}
if ($wt !== -1)
	echo $str_array[0];
?>

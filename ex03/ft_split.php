#!/usr/bin/php
<?php
function ft_split($strs)
{
	$res = array_filter(explode(" ", $strs), 'strlen');
	sort($res);
	return $res;
}
?>

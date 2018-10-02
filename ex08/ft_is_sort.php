#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$wt = 0;
	$cp = $tab;
	sort($tab);
	if ($cp !== $tab)
		return false;
	return true;
}
?>

#!/usr/bin/php
<?php
$wt = 0;
foreach($argv as $value)
{
	if ($wt++)
		echo "$value\n";
}
?>

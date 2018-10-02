#!/usr/bin/php
<?php
$res=NULL;
$strs = array_filter(explode(" ", $argv[1]), 'strlen');
print_r($strs);
foreach($strs as $value)
	$res = $res . " ". trim($value, " \t\n\0\r\x0b");
echo trim($res, " ");
?>

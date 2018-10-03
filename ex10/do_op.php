#!/usr/bin/php
<?php
if ($argc != 4)
	echo "wrong inputs\n";
$res = 0;
if ($argv[2] === "+")
	$res = intval($argv[1]) + intval($argv[3]);
else if ($argv[2] === "-")
	$res = intval($argv[1]) - intval($argv[3]);
if ($argv[2] === "*")
	$res = intval($argv[1]) * intval($argv[3]);
if ($argv[2] === "/")
	$res = intval($argv[1]) / intval($argv[3]);
if ($argv[2] === "%")
	$res = intval($argv[1]) % intval($argv[3]);
if ($argc == 4)
	echo "$res\n";
?>

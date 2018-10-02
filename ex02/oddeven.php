#!/usr/bin/php
<?php
do
{
	echo "Enter a number: ";
	$input = fgets(STDIN);
	if (feof(STDIN))
		exit();
	$input = trim($input, "\n");
	if (is_numeric($input))
	{
		if (($input % 2) === 0)
			echo "The number $input is even\n";
		else
			echo "The number $input is odd\n";
	}
	else
	{
		if ($input === "\n")
			$input = NULL;
		echo "'" . "$input". "'" . "is not a number\n";
	}
}
while (42)
?>

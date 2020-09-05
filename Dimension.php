#!/usr/bin/env php
<?php

$line = str_repeat("-", 0b11000) . "\n";

echo $line;

$N = readline("N: ");

echo $line;

foreach (range(0, 2**$N-1) as $x) {
	printf("%0{$N}b\n", $x);
}

echo $line . "Total: " . 2**$N . "\n" . $line;

?>

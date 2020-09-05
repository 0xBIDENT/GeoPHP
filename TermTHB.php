#!/usr/bin/env php
<?php

# 0xBIDENT
# /watch?v=sTWrmNLgU9w
# /watch?v=Kwn0ppkqleE

$line = str_repeat("-", 24) . "\n";

echo $line;

foreach (range(0, 15) as $Hnumber) {
	printf("%X", $Hnumber);
}

echo "\n$line";

foreach (range(0, 24, 4) as $triangleHex) {
	printf("#%06X\n", 2**$triangleHex-1);
}

echo $line;

foreach (range(0, 24, 8) as $Triangle_5_12_13) {
	printf("%024b\n", 2**$Triangle_5_12_13-1);
}

echo $line;

?>

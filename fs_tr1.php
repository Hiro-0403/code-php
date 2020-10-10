<?php
$file = "score.txt";
$lines = file($file, FILE_IGNORE_NEW_LINES);
$total = array_sum($lines);
echo $total . PHP_EOL;


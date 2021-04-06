<?php


$nF = array_product(range(1, $argv[1]));
$mF = array_product(range(1, $argv[2]));

echo $nF / $mF;


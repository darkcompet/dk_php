<?php

$s = "（）「」【】🌷これはabc日本語｀｀””";
$a = str_split($s, 2);
$r = implode('', $a);
echo print_r(str_split($s, 2), true) . PHP_EOL;
echo print_r($r, true) . PHP_EOL;
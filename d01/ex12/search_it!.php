#!/usr/bin/php
<?php
if ($argc > 2) {
    $keyword = $argv[1];
    for ($i = 2; $i < $argc; $i++) {
        $pos = strpos($argv[$i], ":");
        if ($pos) {
            $key = substr($argv[$i], 0, $pos);
            $val = substr($argv[$i], $pos + 1);
            $out[$key] = $val;
        }
    }
    if ($out[$keyword]) {
        echo $out[$keyword] . "\n";
    }
}
?>
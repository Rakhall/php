#!/usr/bin/php
<?php
    if ($argc != 2)
        exit ;
    $array = explode(" ", trim("$argv[1]"));
    $second = array_filter($array);
    $str = implode(" ", $second);
    echo ("$str\n");
?>

#!/usr/bin/php
<?php
if ($argc != 2) {
    echo("Incorrect Parameters\n");
    exit(1);
} else {
    $arr = str_replace(" ", "", $argv[1]);
    $num1 = intval($arr);
    $sign = substr(substr($arr, strlen($num1)), 0, 1);
    $num2 = substr(substr($arr, strlen($num1)), 1);
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo("Syntax Error\n");
        exit(1);
    }
    if ($sign == '+') {
        echo $num1 + $num2 . "\n";
    } else if ($sign == '-') {
        echo $num1 - $num2 . "\n";
    } else if ($sign == '*') {
        echo $num1 * $num2 . "\n";
    } else if ($sign == '/') {
        if ($second == 0) {
            echo("Incorrect Parameters\n");
            exit(1);
        }
        echo $num1 / $num2 . "\n";
    } else if ($sign == '%') {
        if ($second == 0) {
            echo("Incorrect Parameters\n");
            exit(1);
        }
        echo $num1 % $num2 . "\n";
    } else {
        echo("Syntax Error\n");
        exit(1);
    }
}
?>
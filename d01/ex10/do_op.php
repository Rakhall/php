#!/usr/bin/php
<?php
if ($argc == 4) {
    $a = trim($argv[1]);
    $b = trim($argv[3]);
    $sign = trim($argv[2]);
    if ($sign == '+')
        echo($a + $b);
    else if ($sign == '/') {
        if ($argv[3] == 0) {
            echo("Incorrect Parameters\n");
            exit(1);
        }
        echo($a / $b);
    } else if ($sign == '-')
        echo($a - $b);
    else if ($sign == '*')
        echo($a * $b);
    else if ($sign == '%') {
        if ($argv[3] == 0) {
            echo("Incorrect Parameters\n");
            exit(1);
        }
        echo($a % $b);
    } else
        echo("Incorrect Parameters");
} else {
    echo("Incorrect Parameters");
}
echo("\n");
?>
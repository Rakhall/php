#!/usr/bin/php
<?php
function order($a)
{
    $b = 0;
    $a = ord($a);
    if ($a >= 65 && $a <= 90)
        $b = $a - 65;
    else if ($a >= 97 && $a <= 122)
        $b = $a - 97;
    else if ($a >= 48 && $a <= 57)
        $b = $a + 4;
    else if ($a >= 32 && $a <= 47)
        $b = $a + 30;
    else if ($a >= 58 && $a <= 64)
        $b = $a + 20;
    else if ($a >= 91 && $a <= 96)
        $b = $a - 6;
    else if ($a >= 123 && $a <= 127)
        $b = $a - 32;
    return ($b);
}

function ft_sort($a, $b)
{
    $i = 0;
    while ($a[$i] && $b[$i]) {
        if (order($a[$i]) != order($b[$i]))
            return (order($a[$i]) - order($b[$i]));
        $i++;
    }
    return (order($a[$i]) - order($b[$i]));
}

$i = 1;
while ($i < $argc) {
    $str .= " " . $argv[$i] . " ";
    $i++;
}
$tmp = trim($str);
while ((strpos($tmp, "  ")) == true)
    $tmp = str_replace("  ", " ", $tmp);
$arr = explode(" ", $tmp);
usort($arr, "ft_sort");
foreach ($arr as $i)
    echo("$i\n");
?>
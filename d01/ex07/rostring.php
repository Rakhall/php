#!/usr/bin/php
<?php
if ($argc > 1)
{
    $str = explode(" ", trim("$argv[1]"));
    $str = array_filter($str);
    $str = array_values($str);
    $str[count($str)] = $str[0];
    unset($str[0]);
    $arr = implode(" ", $str);
    trim("$arr");
    echo ("$arr\n");
}
?>
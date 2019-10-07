#!/usr/bin/php
<?php
function ft_split($line)
{
    $array = explode(" ", trim("$line"));
    $second = array_filter($array);
    sort($second);
    return $second;
}
?>
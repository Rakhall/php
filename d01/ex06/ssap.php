#!/usr/bin/php
<?php
    $i = 1;
    while ($i < $argc) {
        $str .= " ".$argv[$i]." ";
        $i++;
    }
    $array = explode(" ", trim("$str"));
    $second = array_filter($array);
    sort($second);
    for($q = 0; $q < count($second); $q++)
    {
        echo ("$second[$q]\n");
    }

?>
#!/usr/bin/php
<?php
    function ft_is_sort($arr) {
        $temp = $arr;
        sort($temp);
        if ($temp === $arr)
            return true;
        return false;
    }
?>
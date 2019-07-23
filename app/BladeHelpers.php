<?php

function check($str, $condition, $empty = true)
{
    if ($str == $condition) {
        return '(X)';
    } else if (!$empty) {
        return '';
    } else {
        return '()';
    }
}

function checkArray($array, $str)
{
    if (in_array($str, json_decode($array))) {
        return '(X)';
    } else {
        return '()';
    }
}

function ifElse($str)
{
    if ($str == 1) {
        return 'Si';
    } else {
        return 'No';
    }
}

function ifValue($str)
{
    if ($str != '' || $str != NULL) {
        return $str;
    } else {
        return 'No';
    }
}

function showList($str)
{
    return implode(', ', json_decode($str));
}

function showDate($date)
{
    return optional($date)->format('d-m-Y');
}

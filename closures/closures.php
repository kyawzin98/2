<?php
include "../index.php";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res = array_filter($array, function ($item) {
    return $item % 2 == 0;
});

print "<pre>";
print_r($res);
print_r($array);
print "</pre>";

$filterFunc=function ($item) {
    return $item % 2 == 1;
};

$res=array_filter($array,$filterFunc);
print "<pre>";
print_r($res);
print "</pre>";
<?php
error_reporting(E_ALL);
$global1 = '123';
function globalFunction($global1)
{
    $functionVar = 3333;


    var_dump('inside >>> ' . $global1);
    $global1= mt_rand();
    unset($global1);


}

globalFunction($global1);
var_dump('outside >>> ' . $global1);

globalFunction($global1);
var_dump('outside2 >>> ' . $global1);
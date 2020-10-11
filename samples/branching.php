<?php

error_reporting(E_ALL);

$number = (int)$_GET ['p1'];
    if ($number === 0){
        echo "Number {$number} is zero";
}
    elseif ($number %2 === 0) {
        echo "Number {$number} is even";
}   else {
        echo "Number {$number} is odd";
}

echo '<br>';

switch ($number) {
    case 0:
    case $number < 0:
        echo "Number {$number} is zero";
        break;
    case 1:
        echo "Number {$number} is one";
        break;
    case 2:
        echo "Number {$number} is two";
        break;
    case 3:
        echo "Number {$number} is three";
        break;
    case ($number %2 === 0);
        echo "Number {$number} is even";
        break;
    default:
        echo "Number {$number} is odd";
}

echo '<br>';

echo $number %2 === 0 ? "Number {$number} is even" : "Number {$number} is odd";

echo '<br>';

$mtest = $_GET['p2'] ?? 'default';
var_dump($mtest);
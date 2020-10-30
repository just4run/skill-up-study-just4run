<?php

error_reporting(E_ALL);

// 123
echo '<p style="background-color: #666666; color:#ffffff; padding: 10px;">Задание 1</p>';

$x = true;
if ($x == true) {
    echo 1;
}
if ($x == true) {
    echo 2;
}
if ($x == true) {
    echo 3;
}

echo '<br> <br> <br>';

// switch ($number) --> ugly ternary operators
echo '<p style="background-color: #666666; color:#ffffff; padding: 10px;">Задание 2</p>';

$number = (int)$_GET['p1'] ?: "default";
$message =
    ($number == 0 ? "zero. " : "") ?:
        ($number < 0 ? "negative. " : "") ?:
            ($number === 1 ? "one. " : "") ?:
                ($number === 2 ? "two. " : "") ?:
                    ($number % 2 === 0 ? "{$number} is even" : "{$number} is odd");

echo "{$number} is {$message}";
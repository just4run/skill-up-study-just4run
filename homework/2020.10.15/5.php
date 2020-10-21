<?php

function powerNum(int $number, int $pow): int
{
    if ($pow === 0) {
        return 1;
    }
    if ($pow % 2 === 0) {
        $pNumber = powerNum($number, $pow / 2);
        return $pNumber * $pNumber;
    } else {
        return $number * powerNum($number, $pow - 1);
    }
}

echo '<br> <br> <br>';

$array = [
    'a' => 'a1',
    'b' => 'b2',
    'c' => [
        'c1' => 'e1',
        'c2' => 'e2',
        'c3' => [
            'e3' => 'f1',
            'e4' => 'f2'
        ]
    ]
];

function printArray($array, $key = null, $pad = 3)
{
    if (empty($key)) {
        echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "Array", PHP_EOL;
    } else {
        echo str_pad('', $pad - 6, ' ', STR_PAD_LEFT) . "[$key] => Array \r\n";
    }
    echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "{ \r\n";
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            printArray($value, $key, $pad + 6);
        } else {
            echo str_pad('', $pad, ' ', STR_PAD_LEFT) . "[$key] => $value \r\n";
        }
    }
    echo str_pad('', $pad - 3, ' ', STR_PAD_LEFT) . "} \r\n";
}

printArray($array);

echo '<br> <br> <br>';

function countArray($array)
{
    foreach ($array as $value) {
        $count = 1 + $count;
        if (is_array($value)) {
            $count = countArray($value) + $count;
        }
    }
    return $count;
}

echo countArray($array);
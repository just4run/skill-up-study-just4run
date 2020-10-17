<?php

//    error_reporting(E_ALL);

/// _____TASK 1_____
echo '<p style="background-color: #666; color:#fff; padding: 10px;">Задание 1</p>';

for ($i = 1; $i <= 3; $i++) {
    $x = $i;
    if ($x == 1) {
        echo 1;
    }
    if ($x == 2) {
        echo 2;
    }
    if ($x == 3) {
        echo 3;
    }
}
// 123

echo '<br> <br> <br>';

// _____TASK 2_____
echo '<p style="background-color: #666; color:#fff; padding: 10px;">Задание 2</p>';
$number = (int)$_GET['p1'] ?: "default";
$message = "";
$message .= ($number === 0) ? "zero. " : "";
$message .= ($number < 0) ? "negative. " : "";
$message .= ($number === 1) ? "one. " : "";
$message .= ($number === 2) ? "two. " : "";
$message .= ($number % 2 === 0) ? "{$number} is even" : "{$number} is odd";
echo "{$number} is {$message}";

// switch ($number) --> ugly ternary operators


echo '<br> <br> <br>';

// _____TASK 3____
echo '<p style="background-color: #666; color:#fff; padding: 10px;">Задание 3</p>';

$tasks = [
    [
        'id' => '0',
        'title' => 'gardener',
        'description' => 'raise a cucumber',
        'owner' => 'Oleg',
        'deadline' => '20.12.2020',
        'status' => 'in processing',
    ],
    [
        'id' => '1',
        'title' => 'builder',
        'description' => 'home construction',
        'owner' => 'Igor',
        'deadline' => '03.03.2020',
        'status' => 'completed',
    ],
    [
        'id' => '2',
        'title' => 'herdsman',
        'description' => 'walk the pig',
        'owner' => 'Victor',
        'deadline' => '17.05.2022',
        'status' => 'in processing',
    ],
];

var_dump($tasks);
<?php

//    error_reporting(E_ALL);


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


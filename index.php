<?php

//echo 'Hello World', "\n";

//var_dump(1 == '1', 1 === '1');
//var_dump(1 != 2, 1 != 1);


$menu = [
    [
        'title' => 'Samples',
        'children' => '',

        [
            'url' => '/samples/arrays.php',
            'title' => 'Arrays',
        ],
        [
            'url' => '/samples/basics.php',
            'title' => 'Basics',
        ],
        [
            'url' => '/samples/branching.php',
            'title' => 'Branching',
        ],
        [
            'url' => '/samples/html.php',
            'title' => 'HTML',
        ],
        [
            'url' => '/samples/math.php',
            'title' => 'Math',
        ],
        [
            'url' => '/samples/types.php',
            'title' => 'Types',
        ],
    ]
];

var_dump($menu);
<?php

$a1 = ['test', 'qwerty', 123];
$a2 = [4 => 'test', 2 => 'qwerty', 244 => 123];
$a3 = [
    'key1' => 'Test',
    'colour' => 'Red',
    'car' => 'Porshe'
];
$groups = [
    [
        'id' => 1,
        'name' => 'PHP basics',
        'students' => [
            [
                'name' => 'Mad Max',
                'age' => 33
            ],
            [
                'name' => 'Ned Flanders',
                'age' => 52
            ]
        ]
    ],
    [
        'id' => 2,
        'name' => 'JS basics',
        'students' => [
            [
                'name' => 'Bart Simpson',
                'age' => 11
            ],
            [
                'name' => 'Bender Rodriges',
                'age' => 100
            ]
        ],
    ]
];

//var_dump(
//    $groups[1]['name'],
//    $groups[1]['students'][0]['name']);

$groups[0]['students'][] = [
    'name' => 'Homer Simpson',
    'age' => 45
];
array_push($groups[0]['students'], [
    'name' => 'Marge Simpson',
    'age' => 35
]);

//var_dump($groups);


$string = 'Hello World';
//var_dump($string[0], $string[-1]);

$a5 = [
    'qwa-qwa',
    1,
    5,
    3,
    4,
    'test'
];

natcasesort($a5);
//var_dump($a5);

$students = $groups [0]['students'];
var_dump($students);

usort($students, static function (array $a, array $b) {
    return $a['age'] <=> $b['age'];
}
);

var_dump($students);
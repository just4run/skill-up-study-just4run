<?php

//for ($i = 0; $i < 10; $i++) {
//    var_dump($i);
//}
//
//$k = 0;
//for (; $k < 2; $k++) {
//    var_dump($k);
//}
//
//$i = 5;
//while ($i > 0) {
//    var_dump($i);
//    $i--;
//}
//$i = 0;
//do {
//    var_dump($i);
//} while ($i > 0);
//
//
//while (true) {
//    var_dump(date('H:i:s'));
//    sleep(1);
//}

//
//for ($i=0; $i < 10; $i++) {
//    var_dump($i);
//};
//
//$k = 0;
//for (; $k < 2; $k++) {
//    var_dump($k);
//};
//$i = 5;
//while ($i > 0) {
//    var_dump($i);
//    $i--;
//};
//
//$i = 0;
//
//do {
//    var_dump($i);
//} while ($i > 0);
//
//
//$groups = [
//    [
//        'id' => 1,
//        'name' => 'PHP basics',
//        'students' => [
//            [
//                'name' => 'Mad Max',
//                'age' => 33
//            ],
//            [
//                'name' => 'Ned Flanders',
//                'age' => 52
//            ]
//        ]
//    ],
//    [
//        'id' => 2,
//        'name' => 'JS basics',
//        'students' => [
//            [
//                'name' => 'Bart Simpson',
//                'age' => 11
//            ],
//            [
//                'name' => 'Bender Rodriges',
//                'age' => 100
//            ]
//        ],
//    ]
//];
//
//foreach ($groups as $group) {
//    echo "#{$group ['id']}: {$group ['name']}", PHP_EOL;
//    foreach ($group ['students'] as $student) {
//        echo "- {$student ['name']}, {$student ['age']} years old", PHP_EOL;
//    }
//}
//
$a = [
    'type' => 'Smartphone',
    'mark' => 'Samsung Galaxy S20',
    'color' => 'Red',
    'memory' => '128Gb',
];

foreach ($a as $key => &$value) {
    $value .= '[Edited]';
//    echo "{$key} : {$value}", PHP_EOL;
};
unset($value);
var_dump($a);
//
//for ($i=0; $i <10;$i++){
//    if ($i % 2 !== 0){
//        continue;
//    }
//
//    if ($i === 5 || $i === 6){
//        break;
//    }
//    var_dump($i);
//}
//
//for ($column = 2; $column <= 9; $column++) {
//    for ($row = 2; $row <= 10; $row++) {
//        $result = $column * $row;
//
//        if ($column === 5 && $row === 5) {
//            //            break (2);
//            continue (2);
//        }
//        echo "{$column} * {$row} = {$result}", PHP_EOL;
//    }
//    echo PHP_EOL;
//}

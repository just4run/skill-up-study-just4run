<?php

$name = $_POST['name'] ?? null;
$surname = $_POST['surname'] ?? null;
$message = $_POST['message'] ?? null;

if (!$name || !$surname || !$message) {
    exit('Name, surname and message are required');
}

$search = array(
    'loh', 'pidr', 'lalka',
    'а' => ['а', 'a', '@'],
    'б' => ['б', '6', 'b'],
    'в' => ['в', 'b', 'v'],
    'г' => ['г', 'r', 'g'],
    'д' => ['д', 'd', 'g'],
    'е' => ['е', 'e'],
    'ё' => ['ё', 'е', 'e'],
    'ж' => ['ж', 'zh', '*'],
    'з' => ['з', '3', 'z'],
    'и' => ['и', 'u', 'i'],
    'й' => ['й', 'u', 'y', 'i'],
    'к' => ['к', 'k', 'i{', '|{'],
    'л' => ['л', 'l', 'ji'],
    'м' => ['м', 'm'],
    'н' => ['н', 'h', 'n'],
    'о' => ['о', 'o', '0'],
    'п' => ['п', 'n', 'p'],
    'р' => ['р', 'r', 'p'],
    'с' => ['с', 'c', 's'],
    'т' => ['т', 'm', 't'],
    'у' => ['у', 'y', 'u'],
    'ф' => ['ф', 'f'],
    'х' => ['х', 'x', 'h', 'к', 'k', '}{'],
    'ц' => ['ц', 'c', 'u,'],
    'ч' => ['ч', 'ch'],
    'ш' => ['ш', 'sh'],
    'щ' => ['щ', 'sch'],
    'ь' => ['ь', 'b'],
    'ы' => ['ы', 'bi'],
    'ъ' => ['ъ'],
    'э' => ['э', 'е', 'e'],
    'ю' => ['ю', 'io'],
    'я' => ['я', 'ya'],
);

$replace = '***';

$message = str_replace($search, $replace, $message);

$data = [
    'name' => $name,
    'surname' => $surname,
    'message' => nl2br($message),
    'time' => date('Y-m-d H:i:s'),
];
$content = json_encode($data, 0) . PHP_EOL;
//$content = serialize($data) . PHP_EOL;
file_put_contents(__DIR__ . '/storage', $content, FILE_APPEND);

header('Location: /chat/');

exit;
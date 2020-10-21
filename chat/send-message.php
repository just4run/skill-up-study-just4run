<?php

$nickname = $_POST['nickname'] ?? null;
$message = $_POST['message'] ?? null;

if (!$nickname || !$message) {
    exit('Nickname and message are required');
}

$data = [
    'nickname' => $nickname,
    'message' => $message,
    'time' => date('Y-m-d H:i:s')
];
//$content = json_encode($data, JSON_THROW_ON_ERROR);
$content = serialize($data);

file_put_contents(__DIR__ . '/storage', $content, FILE_APPEND);

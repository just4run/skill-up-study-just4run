<?php

$files = scandir(__DIR__);
$elements = array_filter($files, static function (string $element) {
    return $element[0] !== '.' && stripos($element, 'docker') === false;
});

$html = '';
foreach ($elements as $element) {
    $rout = __DIR__ . '/' . $element;
    if (is_dir($rout)) {
        $dir = scandir($rout);
        $nestedElements = array_filter($dir, static function (string $element) {
            return $element[0] !== '.';
        });
        foreach ($nestedElements as $nestedElement) {
            $html .= "<li> <a href='/{$element}/{$nestedElement}'>{$element}/{$nestedElement}</li>";
        }
    } else {
        $html .= "<li> <a href='/{$element}'>{$element}</li>";
    }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>DOCUMENT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <ul><?= $html?></ul>
</body>
</html>

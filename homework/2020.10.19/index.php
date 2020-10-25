<?php

error_reporting(E_ALL);

$messages = [];
$file = fopen(__DIR__ . '/storage', 'rb');
while ($line = fgets($file, 1024)) {
    $messages[] = json_decode(trim($line), true, 512, 0);
}
fclose($file);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/homework/css.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <title>Simple form</title>
</head>
<body class="chat-form-page">
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <form class="form" action="/homework/2020.10.19/send-message.php" method="post">
                <h1 class="pb-4">Это форма на**й</h1>
                <div class="chat-form">
                    <label for="name">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </label>
                    <label for="surname">
                        <input type="text" name="surname" id="surname" placeholder="Surname" required>
                    </label>
                    <label for="massage">
                        <textarea name="message" id="massage" placeholder="Your message" rows="10" required></textarea>
                    </label>
                </div>
                <div class="form-buttons">
                    <button type="reset">clear</button>
                    <button type="submit">SEND</button>
                </div>

            </form>
        </div>
        <div class="col-12 col-md-6">
            <table width="100%" border="1">
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
                <?php foreach ($messages as $message) : ?>
                    <tr>
                        <td><?= $message['name'] ?></td>
                        <td><?= $message['surname'] ?></td>
                        <td><?= $message['message'] ?></td>
                        <td><?= $message['time'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


</div>
</body>
</html>
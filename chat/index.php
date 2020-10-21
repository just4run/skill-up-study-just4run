<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/chat/send-message.php" method="post">
    <div>
    <label for ="nickname">Nickname</label>
    <input type="text" name="nickname" id="nickname">
    </div>
    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <button type="submit">Send message</button>
    </div>
</form>
</body>
</html>
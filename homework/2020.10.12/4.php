<?php
error_reporting(E_ALL);

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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home Work</title>
    <link rel="stylesheet" href="../css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
</head>
<body>


<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>owner</th>
        <th>description</th>
        <th>deadline</th>
        <th>status</th>
    </tr>

    <?php
    for ($y = 0; $y <  3; $y++) {
        echo "<tr>
            <td>{$tasks[$y]['id']}</td>
            <td>{$tasks[$y]['title']}</td>
            <td>{$tasks[$y]['owner']}</td>
            <td>{$tasks[$y]['description']}</td>
            <td>{$tasks[$y]['deadline']}</td>
            <td>{$tasks[$y]['status']}</td>
            </tr>";
    }
    ?>

</table>

<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>owner</th>
        <th>description</th>
        <th>deadline</th>
        <th>status</th>
    </tr>
    <?php
    foreach ($tasks as $task) {
        echo "<tr>
            <td>{$task['id']}</td>
            <td>{$task['title']}</td>
            <td>{$task['owner']}</td>
            <td>{$task['description']}</td>
            <td>{$task['deadline']}</td>
            <td>{$task['status']}</td>
            </tr>";
    }
    ?>
</table>
</body>
</html>

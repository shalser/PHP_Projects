<?php
require_once ('config.php');

$info = showTODO($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи с самого понятного курса по PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1>to do</h1>
            <main class="show">
                <div class="main-action">
                    <div class="show-form">
                        <div class="show-title"><?= $info['title'];?></div>
                        <div class="show-text"><?= $info['text'];?></div>
                        <a href="index.php"><button type="button" class="btn-home">Home</button></a>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
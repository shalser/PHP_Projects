<?php
require_once ("config.php");

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
            <main class="add">
                <div class="main-action">
                    <form action="update.php?id=<?= $info['id'];?>" method="POST" class="add-form">
                        <input type="text" name="title" class="add-title" value="<?= $info['title'];?>">
                        <textarea class="add-text" name="text" cols="30" rows="10"><?= $info['text'];?></textarea>
                        <button type="submit" class="btn-add">Apply</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
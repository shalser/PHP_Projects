<?php require_once ('config.php');

$info = getAllTODO();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1>to do</h1>
            <form action="" method="post" class="add-form">
                <a href="add.php"><button type="button" class="add-todo">Add</button></a>
            </form>
            <div class="up-title">
                <div class="title">Title</div>
                <div class="actions">Actions</div>
            </div>
            <div class="line"></div>
            <?php foreach ($info as $data):?>
            <main>
                <div class="main-title"><?=$data['title'];?></div>
                <div class="main-action">
                    <form class="main-form">
                        <a href="show.php?id=<?= $data['id'];?>"><button class="btn-show" type="button" name="show">show</button></a>
                        <a href="edit.php?id=<?= $data['id'];?>"><button class="btn-edit" type="button" name="edit">edit</button></a>
                        <a href="delete.php?id=<?= $data['id'];?>"><button class="btn-delete" type="button" name="delete">delete</button></a>
                    </form>
                </div>
            </main>
            <?php endforeach;?>
        </div>
    </div>
</body>

</html>

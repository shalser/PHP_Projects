<?php
require 'functions.php';

$dataAllCountries = getAllCountries();
$dataAllUsers = getAllUsers();
$dataAllCitizenship = getAllCitizenship();
$dataAllRussianUsers = getAllRussianUsers();
$dataAllUsersMC = getAllUsersMC();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>test</title>
</head>
<body>

<div class="container">
    <div class="tables">
        <table class='mytable'>
            <thead>
            <tr>
                <th colspan="3">countries</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>Capital</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dataAllCountries as $data):?>
                <tr class='odd'>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['country'] ?></td>
                    <td><?= $data['capital'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>


        <table class='mytable' id='users'>
            <thead>
            <tr>
                <th colspan="5">users</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IsActor</th>
                <th>IsSinger</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dataAllUsers as $data):?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['isactor'] ?></td>
                    <td><?= $data['issinger'] ?></td>
                    <td><?= $data['age'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

        <table class='mytable' id='correspondence'>
            <thead>
            <tr>
                <th colspan="2">citizenship</th>
            </tr>
            <tr>
                <th>user_id</th>
                <th>country_id</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dataAllCitizenship as $data):?>
                <tr>
                    <td><?= $data['user_id'] ?></td>
                    <td><?= $data['country_id'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <div class="right-side">
        <br>


        <br>


        <div class="title">Напишите SQL-запрос, который выведет имена всех актёров</div>
        <div class="sql">SELECT Name FROM users</div>
        <br>
        <?php foreach ($dataAllUsers as $data):?>
            <div class="users"><?= $data['name'] ?></div>
        <?php endforeach;?>

        <hr>

        <br>

        <div class="title">Напишите SQL-запрос, который выведет имена тех, кто является и актёром, и музыкантом</div>
        <div class="sql">SELECT Name FROM `users` WHERE IsActor=1 AND IsSinger=1</div>
        <br>
        <?php foreach ($dataAllUsersMC as $data):?>
            <div class="users"><?= $data['name'] ?></div>
        <?php endforeach;?>

        <hr>

        <br>

        <div class="title">Напишите SQL-запрос, который выведет имена всех людей с российским гражданством.</div>
        <div class="sql">SELECT users.Name
            FROM users
            INNER JOIN citizenship ON citizenship.user_id = users.id
            INNER JOIN countries ON countries.id = citizenship.country_id
            WHERE countries.Country = 'Russian Federation'</div>
        <br>
        <?php foreach ($dataAllRussianUsers as $data):?>
            <div class="users"><?= $data['name'] ?></div>
        <?php endforeach;?>
    </div>



</div>







    <script src="script.js"></script>
</body>
</html>
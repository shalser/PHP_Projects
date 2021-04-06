<?php

define('DBNAME', 'shalser82');
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');


function getAllCountries(): array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT * FROM pk_countries";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllUsers(): array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT * FROM pk_users";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllUsersMC(): array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT name FROM `pk_users` WHERE isactor=1 AND issinger=1";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function getAllCitizenship(): array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT * FROM pk_citizenship";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getAllRussianUsers(): array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT pk_users.name
FROM pk_users
INNER JOIN pk_citizenship ON pk_citizenship.user_id = pk_users.id
INNER JOIN pk_countries ON pk_countries.id = pk_citizenship.country_id
WHERE pk_countries.country = 'Russian Federation'";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}






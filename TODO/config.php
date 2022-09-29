<?php

use JetBrains\PhpStorm\NoReturn;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);


const HOST = 'localhost';
const DBNAME = 'todo';
const USER = 'root';
const PASS = '';



function getAllTODO(): bool|array
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
    $sql = "SELECT * FROM info";
    $statement = $db->prepare($sql);
    $statement -> execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

#[NoReturn] function addTODO($data): void
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
    $sql = "INSERT INTO info (title, text) VALUES (:title, :text)";
    $statement = $db->prepare($sql);
//    $statement->bindValue(":title", $_POST['title']); -
//                                                         - можно вот так написать
//    $statement->bindValue(":text", $_POST['text']); -
    $statement -> execute($data); // а можно вот так

//var_dump($statement);
//var_dump($statement->errorInfo());

    header("Location: http://learn/%d0%b7%d0%b0%d0%b4%d0%b0%d1%87%d0%b8_%d1%81_%d1%81%d0%b0%d0%bc%d0%be%d0%b3%d0%be_%d0%bf%d0%be%d0%bd%d1%8f%d1%82%d0%bd%d0%be%d0%b3%d0%be_%d0%ba%d1%83%d1%80%d1%81%d0%b0_%d0%bf%d0%be_PHP/");
    exit();
}

function showTODO($id) {
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
    $sql = "SELECT * FROM info WHERE id=:id";
    $statement = $db ->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $info = $statement->fetch(PDO::FETCH_ASSOC);
    return $info;
}

#[NoReturn] function deleteTODO($id): void
{

    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER,PASS);
    $sql = "DELETE FROM info WHERE id=:id";
    $statement = $db->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->execute();
//var_dump($result);

    header('Location: index.php');
    exit();
}

#[NoReturn] function updateTODO($data): void
{
    $db = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
    $sql = "UPDATE info SET title=:title, text=:text WHERE id=:id";
    $statement = $db->prepare($sql);
    $statement->execute($data);

    header("Location: index.php");
    exit();
}













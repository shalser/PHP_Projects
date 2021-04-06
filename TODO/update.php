<?php
require_once ("config.php");

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "text" => $_POST['text']
];

updateTODO($data);



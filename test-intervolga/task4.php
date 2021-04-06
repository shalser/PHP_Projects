<?php


$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];


function arrayNumber($numberArray) {
    $arrayData = [];
    $data1 = 0;
    $data2 = 0;

    foreach ($numberArray as $value) {
        $data1 = $value;
        if ($data1 === $data2) {
            array_push($arrayData, $data2);
            $data1 = 0;
            $data2 = 0;
        }
        $data2 = $data1;
    }
    $answer = implode(' ', $arrayData);
    echo $answer;
}

arrayNumber($array);





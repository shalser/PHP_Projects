<?php

$filename = 'uploads/1.jpg';

$size = getimagesize($filename); // если это изображение и у него определён размер, то продолжаем
if ($size) {

    $width = 200;
    $height = 200;

    header("Content-type: {$size['mime']}");

    list($width_orig, $height_orig) = getimagesize($filename);

    if ($width && ($width_orig < $height_orig)) {
        $width = ($height / $height_orig) * $width_orig;
    } else {
        $height = ($width / $width_orig) * $height_orig;
    }

    $image_p = imagecreatetruecolor($width, $height);
    $image = imagecreatefromjpeg($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

    imagejpeg($image_p, 'uploads/2.jpg', 100);


} else {
    exit("Загружаемый файл не изображение...");
}


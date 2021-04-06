<?php


//todo весь текст
$fullText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec leo tortor, finibus eget feugiat in, viverra sit amet tellus. Duis placerat ultrices nunc, vel lobortis urna placerat bibendum. Proin tempus sit amet arcu eget mattis. Cras posuere sem nec dolor pulvinar, et convallis ipsum placerat. Aliquam erat volutpat. Etiam sit amet orci quam. Vestibulum sodales velit sed euismod accumsan. Donec ac laoreet est, nec vulputate ex. Ut tincidunt metus bibendum, ornare diam ac, porta dui. Ut dignissim laoreet mauris quis semper. Aenean vehicula nec justo nec aliquet. Praesent tortor enim,imperdiet in luctus sed, porta non quam. Pellentesque mi nisl, iaculis eget lacus sed, consectetur convallis tortor.';

function croppedTextWithALink($fullText, $textWidth, $link, $quantityCrop)
{
    $cropStr = mb_strimwidth($fullText, 0, $textWidth, '...');
    $pieces = explode(" ", $cropStr);
    $lengthPieces = count($pieces);
    $cropPiecesRight = $lengthPieces - $quantityCrop;
    $leftPiece = array_slice((array)$pieces, 0, $cropPiecesRight);
    $rightPiece = array_slice((array)$pieces, $cropPiecesRight, $lengthPieces);
    $rightPiece = implode(' ', $rightPiece);
    $leftPiece = implode(' ', $leftPiece);
    $abbreviatedText = "$leftPiece <a href='$link'>$rightPiece</a>";
    echo $abbreviatedText;
}

croppedTextWithALink($fullText, 180, 'news.php', 3);

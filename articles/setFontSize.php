<?php

//  Cookie aracılığıyla font-size ataması yapacağız

//  önce mevcut değeri okuyalım
$baseFontSize = 16;
if (isset($_COOKIE['base-font-size'])) $baseFontSize = (int)$_COOKIE['base-font-size'];

switch ($_GET['dir']) {
    case 'up':
        $baseFontSize++;
        break;
    case 'down':
        $baseFontSize--;
        break;
}

setcookie('base-font-size', $baseFontSize);


if (isset($_SERVER['HTTP_REFERER'])) header("Location: " . $_SERVER['HTTP_REFERER']);
else header("Location: index.php");

die();

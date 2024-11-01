<?php
/**
 * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
 *
 * @link https://steamcommunity.com/profiles/76561198038416053
 * @link https://github.com/M0st1ce
 *
 * @license GNU General Public License Version 3
 */

// Получаем параметры из GET-запроса с проверкой на наличие
$title = isset($_GET["description"]) ? htmlspecialchars($_GET["description"]) : 'Default Title';
$code = isset($_GET["code"]) ? htmlspecialchars($_GET["code"]) : 'Unknown Error';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height { height: 100vh; }
        .flex-center { align-items: center; display: flex; justify-content: center; }
        .position-ref { position: relative; }
        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px;
            text-align: center;
        }
        .message { font-size: 18px; text-align: center; }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="code"><?php echo $code; ?></div>
        <div class="message" style="padding: 10px;"><?php echo $title; ?></div>
    </div>
</body>
</html>

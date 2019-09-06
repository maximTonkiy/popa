<?php

include_once('config.php'); #Подключение файла

#Обработка адрусов
$URL = explode('/',$_SERVER['REQUEST_URI']);

$template = "<h2>404 - ничего не найдено</h2>";

switch ($URL[1]){
    case '';
        $template = '<form action="" method="post" class="registerAuto">
        <input type="text" name="cnumber" maxlength="9" placeholder="A001ZY174" pattern="[A-Z][0-9]{3}[A-Z]{2}[0-9]{1,3}" required>
        <input type="text" name="fname" placeholder="ФИО" maxlength="128" required>
        <div  class="questionTrailer"> Есть прицеп?<input type="checkbox" id="trailer"></div>
        <div class="trailer">
            <input type="text" name="tnumber" placeholder="001ZY174" maxlength="8" pattern="[0-9]{3}[A-Z]{2}[0-9]{1,3}">
        </div>
        <div class="passengers">
            <h2>Пассажиры<div id="addPassenger">+</div></h2>
        </div>
        <input type="submit" name="register" value="Регистрация">
    </form>';
        break;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/jquery.js"></script>
    <title><?= TITLE ?></title>
</head>
<body>
    <?= $template ?>

</body>
</html>
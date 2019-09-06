<?php

#Данные для подключения к бд

define('HOST','localhost');
define('USER','id_227_25');
define('PASS','id_227_25');
define('BASE','id_227_25');

$dbc = new mysqli(HOST,USER,PASS,BASE)
    or die('Ошибка подключения к базе данных');

# Основние данные сайта
define('TITLE','Регистрация автомобилей')

?>
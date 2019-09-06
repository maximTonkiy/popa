<?php
include_once('bd.php');
 if (isset($_POST['submit'])){
     if (isset($_POST['auto_number']) && isset($_POST['driver_name'])){
         echo '<pre>';
            var_dump($_POST);
         echo '</pre>';
     }else{
         echo '<h2>Вы не написали номер машины или ФИО водителя </h2><br><a href="index.php">Венруться на страницу регистрации</a>';
     }

 }


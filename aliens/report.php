<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Космические пришельцы похищали меня - сообщение по похищении</h2>

<?php
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $alien_description = $_POST['aliendescription'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  $to = 'maxim222333@yandex.ru';
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
    "Number of aliens: $how_many\n" .
    "Alien description: $alien_description\n" .
    "What they did: $what_they_did\n" .
    "Fang spotted: $fang_spotted\n" .
    "Other comments: $other";
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Спасибо за заполнение формы.<br />';
  echo 'Вы были похищены  ' . $when_it_happened;
  echo ' и отстутствовали в течение' . $how_long . '<br />';
  echo 'Количество пришельцев: ' . $how_many . '<br />';
  echo 'Опишите их: ' . $alien_description . '<br />';
  echo 'Что они делали? ' . $what_they_did . '<br />';
  echo 'Видели ли вы мою собаку Фенга?  ' . $fang_spotted . '<br />';
  echo 'Дополнительная информация: ' . $other . '<br />';
  echo 'Ваш адрес электронной почты:' . $email;
?>

</body>
</html>

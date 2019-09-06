<?php
session_start();
$db = mysqli_connect('localhost','id_227_25','id_227_25','id_227_25');
$login = $_POST['login'];
$pass = $_POST['pass'];

if (isset($_POST['submit'])) {
    $query = mysqli_query($db, "SELECT login, pass, admin FROM users WHERE login='" . mysqli_real_escape_string($db, $_POST['login']) . "' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    if ($data['pass'] == $_POST['pass']) {
        $_SESSION['pass'] = $pass;
        $_SESSION['login'] = $login;
    } else {
        echo 'Вы ввели неправильный логи/пароль';
    }
    if (!empty($_POST['admin'])){
        $_SESSION['admin'] = true;
    }
}
echo '<h2>ВЫ вошли как'. $_SESSION['login'].'</h2>';
if ($_SESSION['admin']===true){
    echo '<h4>Вы админ</h4>';
}else{
    echo '<h4>Вы не админ</h4>';
}


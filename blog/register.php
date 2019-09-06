<?php
require_once("config/db.php");

$error = "";
$success = false;

if (isset($_POST['register'])){
    if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['email-conf']) && isset($_POST['password']) && isset($_POST['password-conf'])){
        $login =  $sql->real_escape_string(trim($_POST['login']));
        $password =  $sql->real_escape_string(trim($_POST['password']));
        $passwordConfirm =  $sql->real_escape_string(trim($_POST['password-conf']));
        $email =  $sql->real_escape_string(trim($_POST['email']));

        if (!empty($login) && !empty($password) && !empty($passwordConfirm) && !empty($email)){
            if ($passwordConfirm == $password){
                $query = "INSERT INTO users(`login`, `email`, `password`) VALUES('{$login}','{$email}','{$password}')";
                $sql ->query($query) or $error = "Такой пользователь уже зарегестрирован";
                if (empty($error)) $success = true;
            }else{
                $error = "Пароли не совпадают";
            }
        }else{
            $error = "Не все поля заполненны";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Система регистрация пользователей в своем блоге">
    <meta name="keywords" content="Блог, система регистрации, создание моего аккаунта">
    <title>Регистраация</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <form action="" method="post" class="reg">
        <div class="header">Регистрация</div>
        <?php
            if (!$success) {
                ?>
                <?= (!empty($error) ? "<div class='error'>$error</div>" : "") ?>
                <input type="text" name="login" placeholder="Логин:" autocomplete="off">
                <input type="email" name="email" placeholder="EMAIL:" autocomplete="off">
                <input type="password" name="password" placeholder="Пароль:" autocomplete="off">
                <input type="password" name="password-conf" placeholder="Повторить пароль:" autocomplete="off">
                <input type="submit" name="register" value="Регистрация">
                <?php
            }else{
                echo "<div class = 'success'>Регистрация успешно выполнна</div>";
            }
        ?>
    </form>
</body>
</html>
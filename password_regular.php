<h2>Проверка пароля на корректность</h2>

<form action="./password_regular.php" method="post">
    <input type="password" name="password">
    <input type="submit">
</form>

<?php

// Здесь мы проверяем пароль на корректность

$password = $_POST['password'];

if($_POST['password'] == true) {

    // Пример: http://www.studwin.ru

    if (preg_match_all('~[\w][\d]{3}~', $password) == true) {
        echo $password;
    } else {
        echo 'неверный пароль';
    }
}

?>
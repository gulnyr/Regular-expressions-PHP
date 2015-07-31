<h2>Проверка email на корректность</h2>

<!--Проверка email, только числы-->
<h3>Здесь вводим числа</h3>
<form action="./regular-mail.php" method="post">
    <input type="text" name="email">
    <input type="submit">
</form>

<?php
//if(isset($_POST[]))
$email = $_POST['email'];

if($_POST['email'] == true) {
    if (preg_match_all('~[\d]+@mail\.ru~', $email) == true) {
        echo $email;
    } else {
        echo 'так не сойдет';
    }
}

?>

<br><br><br>

<h3>Здесь можно ввести любой символ</h3>
<!--Проверка email, все буквы и цифры, в том числе тире-->


<form action="./regular-mail.php" method="post">
    <input type="text" name="email2">
    <input type="submit">
</form>

<?php
$email2 = $_POST['email2'];

if($_POST['email2'] == true) {
if(preg_match_all('~[\w]+@mail\.ru~', $email2) == true) {
    echo $email2;
} else {
    echo 'что-то забыли';
}
}

?>

<br><br><br>
<h3>Здесь можно ввести только буквы</h3>
<!--Проверка email, только буквы-->

<form action="./regular-mail.php" method="post">
    <input type="text" name="email3">
    <input type="submit">
</form>

<?php
$email2 = $_POST['email3'];

if($_POST['email3'] == true) {
    if (preg_match_all('~[\D]+@mail\.ru~', $email2) == true) {
        echo $email2;
    } else {
        echo 'цифры лишние или @ не хватает';
    }
}

?>
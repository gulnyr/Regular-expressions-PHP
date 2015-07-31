<h2>Проверка URL на корректность</h2>

<form action="./url_regular.php" method="post">
    <input type="text" name="url">
    <input type="submit">
</form>

<?php

// Здесь мы проверяем на корректность url

$url = $_POST['url'];

if($_POST['url'] == true) {

    // Пример: http://www.studwin.ru

    if (preg_match_all('~http://www\.[\w]+\.(ru|com|info)~', $url) == true) {
        echo $url;
    } else {
        echo 'некорректный url';
    }
}

?>
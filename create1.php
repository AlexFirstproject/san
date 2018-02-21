<?php
//if (isset($_POST[login]) && isset($_POST[password]) && isset($_POST[name]) && isset($_POST[email])) {
    $login = htmlspecialchars($_POST[login]);
    $password = htmlspecialchars($_POST[password]);
    $name = htmlspecialchars($_POST[name]);
    $email = htmlspecialchars($_POST[email]);
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    if (!$link) {
        die('Ошибка соединения: ' . mysqli_error());
    }
    mysqli_query($link, "INSERT INTO sanbd.users(`is_admin`, `login`, `password`, `name`, `email`) VALUES ('" . $_POST[is_admin] . "','" . $login . "','" . $password . "','" . $name . "', '" . $email . "')");
    mysqli_close($link);
    header('Location: /index.php');
/*} else {
    echo "<h1>Incorrect data entry</h1></br></br><a href='cleate.php'>back</a>";
}*/
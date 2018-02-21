<?php
session_start();
$link = mysqli_connect('127.0.0.1:3306', 'root', '');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
} //перевірка на підключення.
//$query = mysqli_query($link, "SELECT `login`,`password` FROM sanbd.users");
/*$log = "san";
$pas = "333";
if ($log == $_POST[login] && $pas == $_POST[pas]) {
    $_SESSION["loggedIn"] = true;
    $_SESSION["userName"] = $log;
    header('Location: /index.php');
    exit;
}elseif($log != $_POST[login] || $pas != $_POST[pas]){
    $_SESSION["error"]=true;
    $_SESSION["errorName"]="Неверній логин или пароль";
    header('Location: /index.php');
    exit;
}else{
    header('Location: /index.php');
    exit;
}*/
/*$query2 = mysqli_query($link, "SELECT `login` FROM sanbd.users");
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($query2)) {
    echo "<tr><td>" . $row[login] . "</td></tr>";
}
echo "</table>";*/

$log = htmlspecialchars($_POST[login]);
$pas = htmlspecialchars($_POST[pas]);
$query = mysqli_query($link, "SELECT * FROM sanbd.users WHERE `login`= '".$log."' AND `password` = ".$pas);
if ($query != false) {
    $user = mysqli_fetch_assoc($query);
    if ($user[is_admin] == true){
        $_SESSION["loggedIn"] = true;
        $_SESSION["userAdmin"] = true;
        $_SESSION["userName"] = $user[name];
        header('Location: /index.php');
        mysqli_close($link);
        exit;
    }else{
        $_SESSION["loggedIn"] = true;
        $_SESSION["userAdmin"] = false;
        $_SESSION["userName"] = $user[name];
        header('Location: /index.php');
        exit;
    }
}elseif($query == false){
    $_SESSION["error"]=true;
    $_SESSION["errorName"]="Неверній логин или пароль";
    header('Location: /index.php');
    exit;
}else {
    header('Location: /index.php');
    exit;
}
mysqli_close($link);
?>
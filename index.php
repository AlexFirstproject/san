<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>San</title>
    <meta charset="utf-8"/>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<a href="sessionClean.php">Очистить данные.</a><br>
<?php
if ($_SESSION[loggedIn]==true) {
    if($_SESSION[userAdmin] == true){
        echo "<h1>Добро пожаловать ".$_SESSION[userName]."</h1><br>Все пользователи: <br>";
        $link = mysqli_connect('127.0.0.1:3306', 'root', '');
        if (!$link) {
            die('Ошибка соединения: ' . mysqli_error());
        }
        $query = mysqli_query($link, "SELECT `name`,`id`,`is_admin` FROM sanbd.users");?>
        <table border="1">
            <?php while ($ruw = mysqli_fetch_assoc($query)){
                $admin = "";
                if($ruw[is_admin] == true){ $admin = "admin";}
                echo "<tr><td>".$ruw[name]." ".$admin."</td><td><a href='edit.php?id=".$ruw[id]."'>Редактировать пользователя</a></td><td><a                            href='delUser.php?id=".$ruw[id]."'>Удалить</a></td></tr>";
            }?>
        </table>
        <a href="create.php">Создать пользователя</a>
        <?php //mysqli_close($link);
    }else{
        echo "Добро пожаловать ".$_SESSION[userName];
    }
}elseif($_SESSION[error]==true){?>
    <form action="action.php" method="post">
        <p>Login : <input type="text" name="login"/></p>
        <p>Password : <input type="password" name="pas"/></p>
        <p><input type="submit"</p>
    </form>
    <?php echo $_SESSION[errorName];
}else{
?>
<form action="action.php" method="post">
    <p>Login : <input type="text" name="login"/></p>
    <p>Password : <input type="password" name="pas"/></p>
<p><input type="submit"</p>
</form>
<?php } ?>
</br>

<p><h1>Список товаров</h1></p>
<?php
$link = mysqli_connect('127.0.0.1:3306', 'root', '');

$represent = 3;
$page = htmlspecialchars($_GET[page]);

$tov1 = mysqli_query($link, "SELECT * FROM sanbd.tov");
$quantityTov = mysqli_num_rows($tov1);

$page = intval($page);
$quantityPage = intval(($quantityTov - 1) / $represent + 1);
if(empty($page) or $page < 0){$page = 1;}
if($page > $quantityPage){$page = $quantityPage;}

$startTov = $represent * $page - $represent;

$tovQuery = mysqli_query($link, "SELECT * FROM sanbd.tov LIMIT $startTov,$represent");
?>
<table border="1">
    <tr><th>Категория</th><th>Наименование</th><th>Код товара</th><th>Описание</th><th>Цена</th><th>Наличие</th></tr>
    <?php while ($row = mysqli_fetch_assoc($tovQuery)){
        echo "<tr><td>".$row[category]."</td><td>".$row[name]."</td><td>".$row[code]."</td><td>".$row[description]."</td><td>".$row[price]."</td><td>".$row[availability]."</td><td><a href='tovForm.php?task=redact&id=".$row[id]."'>Редактировать</a></td><td><a href='tovForm.php?task=delete&id=".$row[id]."'>Удалить запись</a></td></tr>";
    }
    mysqli_close($link);
    ?>
</table>
<br>
<a href="tovForm.php">Добавить товар</a>
<br><br>
<?php
if ($page != 1){$pageLeft = " <a href='index.php?page=1'><<</a> <a href='index.php?page=".($page-1)."'><</a> ";}
if ($page != $quantityPage){$pageRight = " <a href='index.php?page=".($page+1)."'>></a> <a href='index.php?page=".$quantityPage."'>>></a> ";}
if ($page - 2 >= 1){$page2left = "| <a href='index.php?page=".($page-2)."'>".($page-2)."</a> ";}
if ($page - 1 >= 1){$page1left = "| <a href='index.php?page=".($page-1)."'>".($page-1)."</a> |";}
if ($page + 2 <= $quantityPage){$page2right = " <a href='index.php?page=".($page+2)."'>".($page+2)."</a> |";}
if ($page + 1 <= $quantityPage){$page1right = "| <a href='index.php?page=".($page+1)."'>".($page+1)."</a> |";}

echo $pageLeft.$page2left.$page1left.'<b> '.$page.' </b>'.$page1right.$page2right.$pageRight;
?>




</body>
</html>
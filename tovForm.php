<?php
if (isset($_GET[task]) and $_GET[task] == 'redact'){
    $tovId = $_GET[id];
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    $query = mysqli_query($link, "SELECT * FROM sanbd.tov WHERE id=".$tovId);
    $row = mysqli_fetch_assoc($query); ?>
    <form action="tovObj.php" method="post">
        <p>Имя товара: <input type="text" name="name" value="<?php echo $row[name]; ?>" required/></p>
        <p>Код товара: <input type="text" name="code" value="<?php echo $row[code]; ?>" required/></p>
        <p>Описание:</br><textarea name="description" cols="60" rows="5" required><?php echo $row[description]; ?></textarea></p>
        <p>Цена: <input type="text" name="price" value="<?php echo $row[price]; ?>" required/></p>
        <p>Наличие: <input type="radio" name="availability" value="0" checked/>Нет в наличии
            <input type="radio" name="availability" value="1"/>Есть в наличии</p>
        <input type="hidden" name="task" value= "redact"/>
        <input type="hidden" name="id" value= "<?php echo $row[id]; ?>"/>
        <p><input type="submit" value="Отправить"/>
            <input type="reset" value="Очистить"/></p>
    </form>
    <?php mysqli_close($link);
}elseif(isset($_GET[task]) and $_GET[task] == 'delete'){
    $tovId = $_GET['id'];
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    mysqli_query($link, "DELETE FROM sanbd.tov WHERE id=".$tovId);
    mysqli_close($link);
    header('Location: /index.php');
}else{ ?>
    <form action="tovObj.php" method="post">
    <p>Имя товара: <input type="text" name="name" required/></p>
    <p>Код товара: <input type="text" name="code" required/></p>
    <p>Описание:</br><textarea name="description" cols="60" rows="5" required></textarea></p>
    <p>Цена: <input type="text" name="price" required/></p>
    <p>Наличие: <input type="radio" name="availability" value="0" checked/>Нет в наличии
                <input type="radio" name="availability" value="1"/>Есть в наличии</p>
    <input type="hidden" name="task" value= "set"/>
    <p><input type="submit" value="Отправить"/>
       <input type="reset" value="Очистить"/></p>
    </form>
<?php
}
?>
</br>
<a href="index.php">Переход на главную</a>
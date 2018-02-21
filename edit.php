<?php
if(isset($_GET['id'])){
    //came from index
    $userId = $_GET['id'];
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    $query = mysqli_query($link, "SELECT * FROM sanbd.users WHERE id=".$userId);
    $ruw = mysqli_fetch_assoc($query);
    ?>
        <form action="edit.php" method="post">
        <p>Login : <input type="text" name="login" value="<?php echo $ruw[login] ?>"/></p>
        <p>Password : <input type="text" name="pas" value="<?php echo $ruw[password] ?>"/></p>
        <p>Name : <input type="text" name="name" value="<?php echo $ruw[name] ?>"/></p>
        <p>Email : <input type="text" name="email" value="<?php echo $ruw[email] ?>"/></p>
            <input type="hidden" name="id" value="<?php echo $ruw[id] ?>"/>
        <p><input type="submit"></p>
        </form>
    <?php
    mysqli_close($link);
}elseif(isset($_POST['id'])){
    //handling submitted form
    $userId = $_POST['id'];
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    mysqli_query($link, "UPDATE sanbd.users SET `login`='".$_POST[login]."', `password`='".$_POST[pas]."', `name`='".$_POST[name]."', `email`='".$_POST[email]."' WHERE `id`=".$userId);
    mysqli_close($link);
    $link = mysqli_connect('127.0.0.1:3306', 'root', '');
    $query = mysqli_query($link, "SELECT * FROM sanbd.users WHERE id=".$userId);
    $ruw = mysqli_fetch_assoc($query);
    ?>
    <form action="edit.php" method="post">
        <p>Login : <input type="text" name="login" value="<?php echo $ruw[login] ?>"/></p>
        <p>Password : <input type="text" name="pas" value="<?php echo $ruw[password] ?>"/></p>
        <p>Name : <input type="text" name="name" value="<?php echo $ruw[name] ?>"/></p>
        <p>Email : <input type="text" name="email" value="<?php echo $ruw[email] ?>"/></p>
        <input type="hidden" name="id" value="<?php echo $ruw[id] ?>"/>
        <p><input type="submit"></p>
    </form>
    <?php
    mysqli_close($link);
}
?>
</br>
<a href="index.php">Title</a>
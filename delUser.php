<?php
$userId = $_GET['id'];
$link = mysqli_connect('127.0.0.1:3306', 'root', '');
mysqli_query($link, "DELETE FROM sanbd.users WHERE id=".$userId);
mysqli_close($link);
header('Location: /index.php');
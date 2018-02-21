<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>"Clean session"</title>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Сессионые данные очищены !</h1>
<a href="index.php">Возврат на главную</a>
</body>
</html>
<?php session_destroy(); ?>
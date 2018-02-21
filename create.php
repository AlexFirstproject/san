<form action="create1.php" method="post" xmlns="http://www.w3.org/1999/html">
<p>Admin : <input type="radio" name="is_admin" value="0" checked/> User
           <input type="radio" name="is_admin" value="1"/> Administrator</p>
<p>Login : <input type="text" name="login" required pattern="^[A-Za-z0-9]+$"/></p>
<p>Password : <input type="text" name="password" required pattern="^[A-Za-z0-9]+$"/></p>
<p>Name : <input type="text" name="name" required pattern="^[A-Za-z0-9]+$"/></p>
<p>Email : <input type="email" name="email" required/></p>
<p><input type="submit"></p>
</form>
<p><a href="index.php">Title</a> </p>

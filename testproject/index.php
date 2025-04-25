<?php
if (isset($_GET["message"])){
    echo $_GET["message"];
} else {echo "Мой менеджер таблиц";}
?>
<form action="dbcreate.php">
    <input type="submit" value = "создание базы данных">
</form>
<form action="tablecreate.php">
    <input type="submit"value = "создать таблицу">
</form>
<form action="reg.php">
    <input type="text" name="login" placeholder="логин">
    <input type="text" name="password" placeholder="пароль">
    <input type="submit" value="зарегестрировать пользователя">
</form>
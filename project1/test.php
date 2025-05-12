|<?php
$login = $_POST["login"];
$password = $_POST["password"];
echo "Логин {$login}, пароль {$password}";
$dbquery = new PDO("mysql:host=localhost;dbname=querydb", "root", "");
$sqlrequest = "INSERT INTO testtable (User, Password) values('{$login}','{$password}')";
$dbquery ->exec($sqlrequest);
?>
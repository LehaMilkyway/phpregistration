<?php
$login = $_GET["login"];
$password = $_GET["password"];
echo "Пользователь зашел под логином ".$login." и паролем {$password}.";
$pdo = new PDO("mysql:host=localhost;dbname=db011","root","");
$pdo ->exec("INSERT INTO users (login,pass) values('{$login}','{$password}')");

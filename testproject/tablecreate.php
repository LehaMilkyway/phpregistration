<?php
$pdo = new PDO("mysql:host=localhost;dbname=db011","root","");
try {
$pdo->exec("CREATE TABLE users( 
                id INT PRIMARY KEY AUTO_INCREMENT,
                login varchar(50),
                pass varchar(50)
            )");
    echo "таблица users создана";
} catch (PDOException $Exception){
    $msg = $Exception->getMessage();
    header("Location:index.php?message=таблица уже существует {$msg}");
}
?>


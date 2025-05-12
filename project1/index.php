<h1>заголовок 1</h1>
<form action="test.php" method = "post">
    <input type="text" name = "login">
    <input type="text" name  = "password">
    <input type="submit">
    
</form>
<?php
echo "<h1>Заголовок 2</h1>";
for ($i = 1; $i < 10; $i++)
{
    echo "Квадрат числа $i равен " . $i * $i;
}
?>
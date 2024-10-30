<?php
$host = 'localhost'; // адрес сервера
$db = 'my_database'; // имя базы данных
$user = 'root'; // имя пользователя
$pass = ''; // пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
?>

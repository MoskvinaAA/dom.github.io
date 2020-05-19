<?php
if (isset($_POST['name']) && isset($_POST['msg'])){

// Переменные с формы
$name = $_POST['name'];
$text = $_POST['msg'];
$photo = $_POST['photo'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'filipich'; // Имя БД
$db_table = "reviews"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO ".$db_table." (username,usertext) VALUES ('$name','$text')");

// if ($result == true){
// echo "Ваш отзыв отправлен";
// }else{
// echo "Не удалось отправить отзыв";
// }
}
header("Location: http://dom-prestarelyh/reviews.php")
?>
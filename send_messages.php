<?php
//Проверям есть ли переменные на добавление
if(isset($_POST['message']) && $_POST['message'] != "" && $_POST['message'] != " ") {
	//Стартуем сессию для записи логина пользователя
	session_start();
	//Принимаем переменную сообщения
	$message = $_POST['message'];
	//Переменная с логином пользователя
	$login = $_SESSION['login'];
	//Подключаемся к базе
	include("connect_database.php");
	//Добавляем все в таблицу
	$res = mysqli_query($mysql_connect, "INSERT INTO `messages` (`login`,`message`) VALUES ('$login','$message') ");
}
?>
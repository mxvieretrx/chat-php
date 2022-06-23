<?php
//Подключаемся к БД
include("connect_database.php");
session_start();
//Выбираем все сообщенияz
$login = $_SESSION['login'];
//Выбираем все сообщения
$res = mysqli_query($mysql_connect, "SELECT * FROM `messages` ORDER BY `id` ");
//Выводим все сообщения на экран
while($row = mysqli_fetch_array($res)) {	
	// echo   "<div class='message'><p id='name'>".$row['login']."&nbsp;</p><p id='text'>".$row['message']."</p></div>";
	if ($login == $row['login']) {
		echo   "<div class='message'><p id='username-in-chat'>".$row['login']."&nbsp;</p><p id='usertext-in-chat'>".$row['message']."</p></div>";
	}
	else {
		echo   "<div class='message'><p id='name'>".$row['login']."&nbsp;</p><p id='text'>".$row['message']."</p></div>";
	}
}

?>

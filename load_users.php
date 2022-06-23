<?php
//Подключаемся к БД
include("connect_database.php");
//Выбираем все сообщения
$res = mysqli_query($mysql_connect, "SELECT `name`, `surname`, `age`, `city` FROM `users` ", MYSQLI_USE_RESULT);
//Выводим все сообщения на экран
while ($row = mysqli_fetch_array($res)) {
	// снова та же грёбаная хрень 
	// echo "<p class='dispname'>".$d['login']."&nbsp;</p><div class='messageborder'><p class='disptext'>".$d['message']."</p></div>";
	echo "<p class='disptext'>".$row['name']." ".$row['surname'].", ".$row['age'].", from ".$row['city']."</p></div>";
}

?>
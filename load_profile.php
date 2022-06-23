<?php
//Подключаемся к БД
include("connect_database.php");
session_start();
//Выбираем все сообщенияz
$login = $_SESSION['login'];
$res = mysqli_query($mysql_connect, "SELECT `name`, `surname`, `age`, `city` FROM `users` WHERE `login` = '$login' ", MYSQLI_USE_RESULT);
//Выводим все сообщения на экран
while ($row = mysqli_fetch_array($res)) {
    // $data = $row;
    echo "<p class='disptext'>".$row['name']." ".$row['surname'].", ".$row['age'].", from ".$row['city']."</p></div>";

}

// echo "<p class='disptext'>".$data['name']." ".$data['surname'].", ".$data['age'].", from ".$data['city']."</p></div>";


?>
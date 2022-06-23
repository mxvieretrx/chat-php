<?php
//Подключаемся к mysql серверу
    //имя - localhost
    //юзер - root
    //пароль - нет
    $mysql_connect = mysqli_connect("localhost","root","");
    //Выбираем базу данных chat
    $db = mysqli_select_db($mysql_connect, "e_chat");
?>
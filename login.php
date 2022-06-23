<?php
 
// Если пришли данные на обработку
if(isset($_POST['login']) && isset($_POST['password']))
{
// Подключаемся к базе данных
    include("connect_database.php");
 
// Записываем все в переменные
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
 
// Достаем из таблицы инфу о пользователе по логину
    // $res = mysqli_query($mysql_connect, "SELECT * FROM 'users' WHERE 'login'='$login' ");
    // $data = mysqli_fetch_array($res);
    $res = mysqli_query($mysql_connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ", MYSQLI_USE_RESULT);
    while ($row = mysqli_fetch_array($res)) {
        $data = $row;
    };
     
// Если такого нет, то пишем что нет
    if(empty($data['login']))
    {
        die("Incorrect login and/or password (incorrect login).");
    }
// Если пароли не совпадают
    if($password != $data['password'])
    {
        die("Incorrect login and/or password (incorrect password).");
    }
// Запускаем пользователю сессию
    session_start();
 
// Записываем в переменные login и id
    $_SESSION['login'] = $data['login'];
    $_SESSION['id'] = $data['id'];
// Переадресовываем на главную
    header("location: index.php");
}
 
?>
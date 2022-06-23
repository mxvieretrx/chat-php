<?php
 
//Проверяем пришли ли данные
if(isset($_POST['login']) && isset($_POST['password']))
{
//Записываем все в переменные
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
    $name = htmlspecialchars(trim($_POST['name']));
    $surname = htmlspecialchars(trim($_POST['surname']));
    $city = htmlspecialchars(trim($_POST['city']));
    $age = htmlspecialchars(trim($_POST['age']));
 
//Проверяем на пустоту
    if($login=="" || $password=="" || $name=="" || $surname=="" || $city=="" || $age=="")
    {
        die("Заполните все поля!");
    }

// Подключаемся к базе данных
    include("connect_database.php");

//Достаем из БД информацию о введенном логине
    $res = mysqli_query($mysql_connect, "SELECT `login` FROM `users` WHERE `login`='$login' ", MYSQLI_USE_RESULT);
    while ($row = mysqli_fetch_array($res)) {
        $data = $row;
    }
    
    
//Если он не пуст, то значит такой уже есть
    if(!empty($data['login']))
    {
        header("location: html/registration_page.html");
        die("This login is already occupied.");
    }

//Проверяем длину пароля
    if(strlen($password) < 6)
    {
        die("The password must be longer than 6 characters.");
    }

//Вставляем данные в БД
    $query = "INSERT INTO `users` (`login`,`password`,`name`,`surname`,`city`,`age`) VALUES('$login','$password','$name','$surname','$city', '$age') ";
    $result = mysqli_query($mysql_connect, $query);

//Если данные успешно занесены в таблицу
    if($result == true)
    {
        header("location: html/registration_success_page.html");
        echo "<p class='disptext'>You have successfully registered!</p>";
    }
//Если не так, то выводим ошибку
    else
    {
        echo "Error! ----> ". mysqli_error($mysql_connect);
        // mysql_error();
    }
}
?>
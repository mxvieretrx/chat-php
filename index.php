<?php
session_start();

if(!isset($_SESSION['login']) || !isset($_SESSION['id']))
{
    include("html/login_page.html");
}

if(isset($_SESSION['login']) || isset($_SESSION['id']))
{
    include("html/user_page.html");
}
?>

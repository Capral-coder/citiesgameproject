<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=g90767_register',
        'g90767_gleb', '07102004gleb' );

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start();// Создаем сессию для авторизации
?>
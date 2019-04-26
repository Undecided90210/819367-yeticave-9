<?php
// заголовок страницы
$title = 'YetiCave. Интернет-аукцион сноубордического и горнолыжного снаряжения';

// служебные функции
require_once('helpers.php');

// кастомные функции
require_once('functions.php');

// переменные, и массивы
require_once('data.php');

// HTML код главной страницы
$page_content = include_template('index.php', 
[
    'categories' => $categories, 
<<<<<<< HEAD
    'ad' => $ad
=======
    'ad' => $ad,
    'warning_time' => $warning_time
>>>>>>> 7d11c9218b468da43502eb3dd0b60ec45760bf63
]);

// окончательный HTML код
$layout_content = include_template('layout.php', 
[
    'categories' => $categories, 
    'content' => $page_content, 
    'user_name' => $user_name, 
    'is_auth' => $is_auth, 
    'title' => $title
]);

// вывод на экрн итоговой страницы
print($layout_content);
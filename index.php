<?php
// служебные функции
require_once('helpers.php');

// переменные, массивы и функции
require_once('data.php');

// HTML код главной страницы
$page_content = include_template('index.php', 
[htmlspecialchars('categories') => $categories, htmlspecialchars('ad') => $ad]);

// окончательный HTML код
$layout_content = include_template('layout.php', 
['categories' => $categories, 'content' => $page_content, 'user_name' => $user_name, 'is_auth' => $is_auth, 'title' => $title]);

// вывод на экрн итоговой страницы
print($layout_content);
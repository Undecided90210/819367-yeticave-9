<?php 
date_default_timezone_set('Europe/Moscow');
function price_formatting($price){
    $price = ceil($price);
    $price = number_format($price, 0, '', ' ');
    $price .= ' <b class="rub">р</b>';
    return $price;
}
function lot_lifetime($death_time){
    $death_timestamp = strtotime($death_time);
    $current_timestamp = time();
    $lifetime = $death_timestamp - $current_timestamp;
    $lifetime_formatted = gmdate('H:i', $lifetime);
    return $lifetime_formatted;
}
function is_warning_time($lifetime){
    $is_time = strtotime($lifetime) <= strtotime('+1 hour');
    return $is_time;
}
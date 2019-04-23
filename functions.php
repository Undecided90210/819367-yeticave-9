<?php 
date_default_timezone_set('Europe/Moscow');
function price_formatting($price){
    $price = ceil($price);
    $price = number_format($price, 0, '', ' ');
    $price .= ' <b class="rub">р</b>';
    return $price;
}
function lot_lifetime(){
    $death_timestamp = strtotime('tomorrow midnight');
    $current_timestamp = time();
    $lifetime = $death_timestamp - $current_timestamp;
    $lifetime_formatted = date('H:i', $lifetime);
    return $lifetime_formatted;
}
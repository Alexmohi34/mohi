<?php
$botToken ='6969796800:AAHdsinhwyCrvxccKyc18w5mILozXqmH-50';

$chatId = '-1001784754147';


function getRealIpAddr()

{

    if (!empty($_SERVER['HTTP_CLIENT_IP']))

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    else

        $ip = $_SERVER['REMOTE_ADDR'];

    return $ip;

}

$ip = getRealIpAddr();
?>
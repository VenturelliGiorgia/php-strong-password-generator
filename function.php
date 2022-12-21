<?php

$lenghtPassword = $_GET["lenghtPassword"] ?? " ";

function randomPassword($lenghtPassword)
{
    $chars = "ABCDEFGHILMNOPQRSTUVWXYZabcdefghilmnopqrstuvwxyz0123456789?!\|£$%&/()^#=@-+_.`'";
    $password = '';
    for ($i = 0; $i < $lenghtPassword; $i++) {
        $charIndex = rand(0, strlen($chars) - 1);
        $password .= $chars[$charIndex];
    }
    return $password;
}

?>
<?php

$pswLength = $_GET['passwordLength'];
//var_dump($pswLength);

function createPassword($strLength)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@{}[]_-';
    //var_dump($characters[strlen($characters) - 1]);
    $string = '';

    for ($i = 0; $i < $strLength; $i++) {

        $rndNum = random_int(0, strlen($characters) - 1);
        //var_dump($rndNum);
        $string .= $characters[$rndNum];
    }
    //var_dump($string);
    return $string;
}

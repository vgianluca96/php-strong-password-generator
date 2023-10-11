<?php

function createPassword($strLength, $repeat)
{

    if ($strLength > 0) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@{}[]_-';
        $string = '';

        for ($i = 0; $i < $strLength; $i++) {

            $rndNum = random_int(0, strlen($characters) - 1);

            if ($repeat != '0') {
                $string .= $characters[$rndNum];
            } else {
                if (!str_contains($string, $characters[$rndNum])) {
                    $string .= $characters[$rndNum];
                } else {
                    $i--;
                }
            }
            var_dump($string);
        }
        return $string;
    }
}

<?php

session_start();

function createPassword($strLength, $repeat, $check)
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '@{}[]_-';
    $characters = '';

    if ($check['Letters'] == '1') {
        $characters .= $letters;
        //var_dump($characters);
    }

    if ($check['Numbers'] == '1') {
        $characters .= $numbers;
        //var_dump($characters);
    }

    if ($check['SpecialChars'] == '1') {
        $characters .= $specialChars;
        //var_dump($characters);
    }

    if ($strLength > 0 && $characters != '') {

        $string = '';

        if ($repeat == 0 && strlen($characters) < $strLength) {
            $maxIteractions = strlen($characters);
            $_SESSION['alert'] = true;
        } else {
            $maxIteractions = $strLength;
            $_SESSION['alert'] = false;
        }

        for ($i = 0; $i < $maxIteractions; $i++) {

            $rndNum = random_int(0, strlen($characters) - 1);

            if ($repeat == 1) {
                $string .= $characters[$rndNum];
            } else {
                if (!str_contains($string, $characters[$rndNum])) {
                    $string .= $characters[$rndNum];
                } else {
                    $i--;
                }
            }
        }
        return $string;
    }
}

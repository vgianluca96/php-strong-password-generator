<?php

session_start();

$pswLength = $_GET['passwordLength'];
$charRepeat = $_GET['charRepeat'];
//var_dump($pswLength);
//var_dump($charRepeat);
$check = [
    'Letters' => $_GET['checkLet'],
    'Number' => $_GET['checkNum'],
    'SpecialChars' => $_GET['checkSpec'],
];
var_dump($check);

include './functions.php';

$_SESSION['password'] = createPassword($pswLength, $charRepeat);
//var_dump($_SESSION['password']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-bg-dark">

    <div class="container">

        <div class="text-center py-3">

            <h1>
                Strong password generator
            </h1>
            <h2>
                Genera una password sicura
            </h2>

        </div>

        <?php

        if (isset($_SESSION['password'])) {
            header('Location: ./redirect.php');
            //var_dump($_SESSION['password']);
        } elseif (isset($pswLength)) {
        ?>

            <div class="alert alert-warning py-3">
                Attenzione: scegliere una lunghezza della password maggiore di zero
            </div>

        <?php
        }
        ?>
        <div class="card text-bg light p-4">

            <form action="" method="get">
                <div class="py-3">
                    <label for="passwordLength" class="form-label">
                        Lunghezza password:
                    </label>
                    <input type="number" id="passwordLength" name="passwordLength" class="form-control">
                </div>
                <div class="py-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="charRepeat" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Consenti ripetizione di più caratteri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="charRepeat" id="flexRadioDefault2" value="0">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Non consentire ripetizione di più caratteri
                        </label>
                    </div>
                </div>
                <div class="py-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="check1" name="checkLet">
                        <label class="form-check-label" for="check1">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="check2" name="checkNum">
                        <label class="form-check-label" for="check2">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="check3" name="checkSpec">
                        <label class="form-check-label" for="check3">
                            Caratteri speciali
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-dark">
                    Invia
                </button>
            </form>

        </div>

</body>

</html>
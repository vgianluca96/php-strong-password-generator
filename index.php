<?php

include './functions.php';

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

        <div class="alert alert-primary py-3">

            Password generata: <?php echo createPassword($pswLength) ?>

        </div>

        <div class="card text-bg light p-4">

            <form action="" method="get">
                <div class="d-flex justify-content-between align-items-center py-3">
                    <label for="passwordLength" class="form-label">
                        Lunghezza password:
                    </label>
                    <input type="number" id="passwordLength" name="passwordLength" class="form-control w-50">
                </div>

                <button type="submit" class="btn btn-dark">
                    Invia
                </button>
            </form>

        </div>

</body>

</html>
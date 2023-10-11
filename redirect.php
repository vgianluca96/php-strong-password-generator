<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-bg-dark vh-100 d-flex align-items-center">

    <div class="container py-4">
        <div class="card text-bg-light py-4 text-center">
            <div class="card-body">
                <h5 class="card-title">
                    Password generata: <?php echo $_SESSION['password']; ?>
                </h5>
            </div>
        </div>
    </div>

</body>

</html>
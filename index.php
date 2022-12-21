<?php

$lenghtPassword = $_GET["lenghtPassword"];
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

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="title text-center mt-4">
                <h1>Strong Password Generator</h1>
                <h2 class="text-white">Genera una password sicura</h2>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-4">
                    <form action="" method=" GET">
                        <div class="text-center p-4">
                            <label for="lenghtPassword" class="form-label p-2 text-white">Lunghezza password</label>
                            <input type="number" class="form-control" id="lenghtPassword" name="lenghtPassword" placeholder="inserisci la lunghezza della password">
                        </div>
                        <div class="d-flex justify-content-center p-2">
                            <button class="btn btn-primary">Invia</button>
                        </div>
                        <div class="text-white mt-4">
                            <span>Password:</span>
                            <?php
                            echo randomPassword($lenghtPassword);
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
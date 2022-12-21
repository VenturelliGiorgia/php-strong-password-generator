<?php

include_once "function.php";

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
            <div class="text-white text-center mt-5 pt-5">
                <span>Password Generata:</span>
                <?php
                echo randomPassword($lenghtPassword);
                ?>
            </div>
            </form>
        </div>
    </main>
</body>

</html>
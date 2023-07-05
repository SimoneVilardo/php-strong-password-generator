<?php
    include __DIR__.'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
    <body>
        <div class="container mt-5 bg-info-subtle border border-info rounded p-5">
            <div class="row">
                <div class="col-6">
                    <h1 class="bg-primary rounded text-white text-center fw-bold mb-4">Password Generator</h1>
                    <form action="index.php" method="GET">
                        <label for="psw">Lunghezza Password:</label>
                        <input class="mb-4" type="text" name="password" id="password"><br>
                        <label for="pass">Password Generata:</label><br>
                        <?php if (isset($_GET['password']) && $_GET['password'] > 0 && $_GET['password'] <= 30 && is_numeric($_GET['password']) == true) { ?>
                            <div class="col-6 text-white bg-dark rounded text-center mt-1 mb-4"><?php echo passRandom(); ?></div>
                        <?php } else if (isset($_GET['password']) && $_GET['password'] !== '') { ?>
                            <div class="col-6 text-white bg-danger rounded text-center mt-1 mb-4">Attenzione inserire un numero da 1 a 30!</div>
                        <?php } ?>
                        <button class="btn btn-primary" type="submit">Invia</button>
                        <button class="btn btn-danger">Annulla</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-danger fw-bold">ECCO LA TUA PASSWORD:</h1>
                    <h2 class="p-3 fw-bold fw-1 text-white bg-dark rounded text-center mt-1 mb-4"><?php echo $_SESSION['genPassword']; ?></h2>
                </div>
            </div>
        </div>
    </body>

</html>
<?php
//echo "tutto ok" ;
//var_dump($_GET);
$email = $_GET["email"];
//echo $email;
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP iscrizione newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container border rounded">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h1>NewsLetter</h1></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
        </header>


        <form action="" method="get">
            <input type="text" placeholder="inserisci la tua email" name="email" class=" rounded">
            <button type="submit" class="btn btn-primary ">Invia form</button>
        </form>

        <div><a href="index.php">Refresh</a></div>


        <?php if (isset($email)): ?>    <!--apro l'if per controllare se email è stata inizializzata-->
            <?php if (correct_email($email)): ?>  <!--apro il secondo if per controllare l'email-->
                <div class="alert alert-success">Email corretta</div>
            <?php else: ?>
                <div class="alert alert-danger">Email non corretta, inserire almeno un " . " e una " @ "</div>
            <?php endif; ?> 

        <?php endif; ?>  <!--chiudo il primo if-->
    </div>
</body>

</html>
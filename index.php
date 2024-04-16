<?php
//echo "tutto ok" ;
//var_dump($_GET);
//var_dump($_GET["email"]);
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark text-white d-flex align-items-center vh-100">
    <div class="container border rounded p-4">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <h1>NewsLetter</h1>
                    </a>

                </div>
                <div><a href="index.php" class="btn btn-primary"><i class="fa-solid fa-rotate-right"></i></a></div>
            </nav>
        </header>
        <main class="bg-secondary text-white">
            <form action="" method="get">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" value="<?php echo $email ?>">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Invia form</button>
            </form>


            <?php if ($email === ""): ?>    <!--qui controllo se la variabile email è vuota, allora mostro un messaggio, altrimenti svolgo l'else-->
                <div class="alert alert-primary">Inserisci una email, campo vuoto</div>
            <?php elseif (isset($email)): ?>    <!--se l'$ email non è vuota, allora controllo se è stata inizializzata e allora svolgo la funzione correct_email-->
                <?php if (correct_email($email)): ?>    <!--se correct_email è vera allora indirizzo l'utente alla pagina ./thank_you_page altrimenti significa che l'email non è vuota ma contiene degli errori-->
                    <?php
                    header('Location: ./thank_you_page.php');
                    ?>
                <?php else: ?>
                    <div class="alert alert-danger">Email non corretta, inserire almeno un "." e una "@"</div>
                <?php endif; ?>
            <?php endif; ?>

        </main>
    </div>
</body>

</html>
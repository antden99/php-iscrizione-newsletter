<?php  
//echo "tutto ok" ;

//var_dump($_GET);

$email = $_GET["email"];
//echo $email;


function correct_email($mail){

    if (str_contains($mail,".") && str_contains($mail,"@")){
        return true;
    }
    return false;
}


if(isset($_GET["email"]))   //con la funzione isset controllo se dalla superglobale GET il valore email è stato inserito
{
    if(correct_email($email)){  //se il valore è stato inserito evoco la funzione correct_email che mi restituisce true o false
        echo "puoi accedere";
    } else {
        echo "non puoi accedere";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP iscrizione newsletter</title>
</head>
<body>
    <h1>NewsLetter</h1>


    <form action="" method="get">
        <input type="text" placeholder="inserisci la tua email" name="email">
        <button type="submit">Invia form</button>
    </form>

    <a href="index.php">Refresh</a>

    <?php      
        if(correct_email($email)){
          echo " <div>Ciao, benvenuto $email</div>";
        }

    ?>
</body>
</html>
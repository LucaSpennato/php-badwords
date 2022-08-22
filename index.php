<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi 
// (***) tutte le occorrenze della parola da censurare. 

    $name = $_GET['name'];
    $lastName = $_GET['lastname'];
    $password = $_GET['password'];

    $censoredPass = str_replace($password, '***', $password);

    $welcomeTxt = 'Hello ' . $name . ' ' . $lastName . ', this is your censored password: ' . $censoredPass;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>PHP exercise</h1>

    <h2 style="color:green">
        <?php
            echo $welcomeTxt;
        ?>

    </h2>
</body>

</html>
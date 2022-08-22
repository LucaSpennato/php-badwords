<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi 
// (***) tutte le occorrenze della parola da censurare. 

    $phpVar = 'hello there';
    // $explTest =  explode( ',', $phpVar );

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

    <h5>
        <?php
        echo $phpVar;
        ?>
    </h5>

    <h2 style="color:green">
        <?php
        $splittedString = str_replace($phpVar, '***', $phpVar);
        var_dump($splittedString);
        ?>
    </h2>
</body>

</html>
<?php 
if (isset($_GET['length'])) {
    // se è settato il parametro della lunghezza della password
    // generiamo la password

    // abbiamo i possibili caratteri per la nostra password
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers   = "0123456789";
    $symbols   = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    // variabile che contiene tutti questi caratteri insieme
    $allChars = $uppercase . $lowercase . $numbers . $symbols;

    

    // stampo tutta la stringa di caratteri
    echo $allChars . "<br>";

    // estraggo un carattere preciso (in questo caso quello a indice 1 → 'B')
    echo substr($allChars, 6, 1) . "<br>";

    // estraggo un carattere randomico da questa stringa
    $randomIndex = random_int(0, strlen($allChars) - 1);
    echo $randomIndex . "<br>";

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    
    <h1>
        Generatore di password sicure

        <hr>

    </h1>


    <form action="submit.php" method="GET">
        <input type="number" name="length" id="length min="5" max="20" >
        <label for="length" placeholder="Lunghezza password (5-20)"></label>

        <button type="submit">Genera</button>
    </form>


</body>
</html>
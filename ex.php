<?php 
if (isset($_GET['length'])) {
    $length = $_GET['length'];

    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';  
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+-=[]{}|;:,.<>?';

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


    <form action="">
        <input type="number" name="length" id="length min="5" max="20">
        <label for="length"></label>

        <button type="submit">Genera</button>
    </form>


</body>
</html>
<?php
// Logica PHP
$generated = null;
$error = null;

$length = filter_input(
    INPUT_GET,
    'length',
    FILTER_VALIDATE_INT,
    ['options' => ['min_range' => 5, 'max_range' => 20]]
);

if ($length !== null && $length !== false) {
    // set di caratteri
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers   = "0123456789";
    $symbols   = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    $allChars = $uppercase . $lowercase . $numbers . $symbols;

    // genera password casuale lunga $length
    $pwd = '';
    for ($i = 0; $i < $length; $i++) {
        $idx = random_int(0, strlen($allChars) - 1);
        $pwd .= $allChars[$idx];
    }

    $generated = $pwd;
} elseif (isset($_GET['length'])) {
    // parametro passato ma non valido
    $error = "La lunghezza deve essere un intero tra 5 e 20.";
}
?>